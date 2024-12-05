<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Listar todas las rooms
    public function index()
    {
        return response()->json(Room::all(), 200);
    }

    // Crear una nueva room
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'location' => 'required|string|max:255',
        ]);

        $room = Room::create($validatedData);

        return response()->json($room, 201);
    }

    // Mostrar una room específica
    public function show(Room $room)
    {
        return response()->json($room, 200);
    }

    // Actualizar una room específica
    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'capacity' => 'sometimes|required|integer',
            'location' => 'sometimes|required|string|max:255',
        ]);

        $room->update($validatedData);

        return response()->json($room, 200);
    }

    // Eliminar una room específica
    public function destroy(Room $room)
    {
        $room->delete();

        return response()->json(null, 204);
    }
}
