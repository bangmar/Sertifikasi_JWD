<?php

namespace App\Http\Controllers;

use App\Models\Fellowship;
use App\Http\Requests\StoreFellowshipRequest;
use App\Http\Requests\UpdateFellowshipRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class FellowshipController extends Controller
{

    public function getCurrentIPK()
    {
        $current_ipk = 3.1;
        return $current_ipk;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $current_ipk = $this->getCurrentIPK();
        return view("create", ["current_ipk" => $current_ipk]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFellowshipRequest $request)
    {

        $data = $request->all();
        $data["current_ipk"] = $this->getCurrentIPK();
        $data["semester"] = intval($request->semester);

        $fellowship = Fellowship::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "phone" => $data["phone"],
            "semester" => $data["semester"],
            "IPK" => $data["current_ipk"],
            "category" => $data["category"],
            "attachment" => ""
        ]);

        // store attachment to storage
        if ($request->file('attachment')) {
            $ext      = $request->file('attachment')->extension();
            $contents = file_get_contents($request->file('attachment'));
            $filename = Str::random(25);
            $path     = "attachments/$filename.$ext";
            Storage::disk('public')->put($path, $contents);
            $fellowship->update(['attachment' => $path]);
        }



        return redirect()->route("result");
    }

    /**
     * Display the specified resource.
     */
    public function show(Fellowship $fellowship)
    {
        $fellowships = Fellowship::orderBy('created_at', 'desc')->get();
        $categoryLabels = [
            'akademik' => 'Beasiswa Akademik',
            'nonAkademik' => 'Beasiswa Non Akademik',
            'influencer' => 'Beasiswa Influencer',
        ];
        return view("result", ["fellowships" => $fellowships, "categoryLabels" => $categoryLabels]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fellowship $fellowship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFellowshipRequest $request, Fellowship $fellowship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fellowship $fellowship)
    {
        //
    }
}