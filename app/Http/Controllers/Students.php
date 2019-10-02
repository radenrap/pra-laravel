<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class Students extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        // dd($data);
        return view('student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # option 1
        // $data = new Student;
        // $data->nim = $request->nim;
        // $data->nama = $request->nama;
        // $data->email = $request->email;
        // $data->jurusan = $request->jurusan;
        // $data->save();

        #option 2 using mass assignment
        // Student::create([
        //     'nim' => $request->nim,
        //     'nama'  => $request->nama,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        # option 3, as simply way from option 2
        $request->validate([
            'nim' => 'required|size:11',
            'nama' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('flashKey', 'Add Student Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nim' => 'required|size:11',
            'nama' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        Student::where('id', $student->id)
            ->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('flashKey', 'Updating Student Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('flashKey', 'Deleting Student Success');
    }
}
