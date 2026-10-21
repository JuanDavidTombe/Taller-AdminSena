<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
use App\Models\Training_center;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Computer;
use App\Models\Apprentice;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Áreas
        $areas = Area::insert([
            ['name' => 'Programación', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Redes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Diseño', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Centros de capacitación
        Training_center::insert([
            ['name' => 'Centro Sena Bogotá', 'location' => 'Bogotá', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Centro Sena Medellín', 'location' => 'Medellín', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Centro Sena Cali', 'location' => 'Cali', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Computadores
        Computer::insert([
            ['number' => 'PC-001', 'brand' => 'HP', 'created_at' => now(), 'updated_at' => now()],
            ['number' => 'PC-002', 'brand' => 'Dell', 'created_at' => now(), 'updated_at' => now()],
            ['number' => 'PC-003', 'brand' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Docentes
        Teacher::insert([
            ['name' => 'Juan Pérez', 'email' => 'juan@mail.com', 'area_id' => 1, 'training_center_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'María López', 'email' => 'maria@mail.com', 'area_id' => 2, 'training_center_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Carlos García', 'email' => 'carlos@mail.com', 'area_id' => 3, 'training_center_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Cursos
        Course::insert([
            ['course_number' => 'A-001', 'day' => 'Lunes', 'area_id' => 1, 'training_center_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_number' => 'A-002', 'day' => 'Martes', 'area_id' => 2, 'training_center_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_number' => 'A-003', 'day' => 'Miércoles', 'area_id' => 3, 'training_center_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Aprendices
        Apprentice::insert([
            ['name' => 'Pedro Ramírez', 'email' => 'pedro@mail.com', 'cell_number' => '3001234567', 'course_id' => 1, 'computer_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ana Martínez', 'email' => 'ana@mail.com', 'cell_number' => '3009876543', 'course_id' => 2, 'computer_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Luis Hernández', 'email' => 'luis@mail.com', 'cell_number' => '3005551234', 'course_id' => 3, 'computer_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
