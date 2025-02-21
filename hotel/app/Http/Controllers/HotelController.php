<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Hiển thị form nhập thông tin phòng (create view)
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Lưu thông tin phòng vào session và chuyển về danh sách các phòng (index view)
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            // Không cần validate hình ảnh vì đây là URL
            'image_url'   => 'nullable|url',
        ]);
    
        $roomData = [
            'id'          => uniqid(),
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'price'       => $request->input('price'),
            'image_url'   => $request->input('image_url'), // Giá trị này có thể là null
        ];
    
        $rooms = $request->session()->get('rooms', []);
        $rooms[] = $roomData;
        $request->session()->put('rooms', $rooms);
    
        return redirect()->route('hotel.index')->with('success', 'Thêm phòng mới thành công!');
    }
    


    /**
     * Hiển thị danh sách các phòng đã thêm (index view)
     */
    public function index(Request $request)
    {
        // Lấy danh sách phòng từ session
        $rooms = $request->session()->get('rooms', []);
        return view('hotel.display', compact('rooms'));
    }
}
