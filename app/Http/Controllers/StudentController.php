<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Inicializar la consulta
        $query = Student::query();

        // Aplicar filtro si hay búsqueda
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%$search%")
                    ->orWhere('lastname', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%")
                    ->orWhere('city', 'LIKE', "%$search%")
                    ->orWhere('address', 'LIKE', "%$search%")
                    ->orWhere('birthdate', 'LIKE', "%$search%")
                    ->orWhere('status', 'LIKE', "%$search%");
            });
        }

        // Obtener los resultados paginados
        $students = $query->orderBy('id', 'DESC')->paginate(10);

        return view('student.index', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::debug('StudentController@create');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {

        $validatedData = $request->validated();


        $student = new Student($validatedData);

        $student->save();


        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encuentra la student por su ID
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'status' => 'required|boolean',
        ]);

        // Obtiene el estudiante a editar
        $student = Student::findOrFail($id);

        // Actualizar los datos del estudiante con los datos del formulario
        $student->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'email' => $request->email,
            'city' => $request->city,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'status' => $request->status,
        ]);

        // Redireccionar a la vista de student.index
        return redirect()->route('students.index')->with('success', 'Estudiante actualizado correctamente.');
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
