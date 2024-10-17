<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoffeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required', 'unique:App\Models\Coffe,name', 'max:255'], // Nombre del café único
            "description" => ['required', 'string', 'max:500'], // Descripción del café
            "price" => ['required', 'numeric', 'min:0'], // Precio del café, mayor o igual a 0
            "origin" => ['nullable', 'string', 'max:255'], // Origen del café, opcional
            "roast" => ['required', 'string', 'max:100'], // Nivel de tueste
            "quantity" => ['required', 'integer', 'min:1'], // Cantidad, al menos 1
            "is_available" => ['required', 'boolean'], // Disponibilidad (booleano)
        ];
    }
    public function store(CoffeRequest $request)
{
    $coffe = Coffe::create($request->all());
    return response()->json(['coffe' => $coffe], Response::HTTP_CREATED);
}

public function update(CoffeRequest $request, Coffe $coffe)
{
    $coffe->update($request->all());
    return response()->json(['coffe' => $coffe], Response::HTTP_OK);
}

}

