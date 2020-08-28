<?php

use App\Especialidad;
use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::updateOrInsert(
            ['id' => 1],
            [
                'id'                    => 1,
                'nombre'                => 'Peluquería',
                'imagen_default'        => 'Peluqueria.png',
                'descripcion_default'   => 'Me Destaco en el arte del corte masculino preguntando siempre a mi cliente qué tipo de motilado desea;
                    sugiriendo uno adecuado a su fisionomía, actitud y cantidad de cabello; tomo mi tiempo y siempre dejo
                    a mi cliente satisfecho.'
            ]
        );

        Especialidad::updateOrInsert(
            ['id' => 2],
            [
                'id'                    => 2,
                'nombre'                => 'Rasurado',
                'imagen_default'        => 'Rasurado.png',
                'descripcion_default'   => 'Utilizo productos para suavizar la piel de mis clientes y la tradicional toalla con agua caliente. Diseño y corte de barba y bigote, recordando que para cada tipo de rostro hay un tipo de corte de barba y de bigote adecuado.'
            ]
        );

        Especialidad::updateOrInsert(
            ['id' => 3],
            [
                'id'                    => 3,
                'nombre'                => 'Masajes y faciales',
                'imagen_default'        => 'Masaje_Facial.png',
                'descripcion_default'   => 'Si quieres disminuir los efectos de factores como la contaminación, estrés y el inevitable paso de los años, además de verse atractivos para sus momentos importantes.'
            ]
        );

        Especialidad::updateOrInsert(
            ['id' => 4],
            [
                'id'                    => 4,
                'nombre'                => 'Cejas',
                'imagen_default'        => 'Ceja.png',
                'descripcion_default'   => 'Tengo gran experiencia en la depilación de cejas para hombre, con los mejores productos para que puedas lucirla correctamente, dependiendo de la forma de tu cara.'
            ]
        );

        Especialidad::updateOrInsert(
            ['id' => 5],
            [
                'id'                    => 5,
                'nombre'                => 'Reporalización',
                'imagen_default'        => 'Repolarizacion.png',
                'descripcion_default'   => 'Administro el proceso para la recuperación del cabello deteriorado, por medio de un tratamiento intensivo de hidratación el cual actúa como restaurador de cada fibra, formando una capa protectora.'
            ]
        );

        Especialidad::updateOrInsert(
            ['id' => 6],
            [
                'id'                    => 6,
                'nombre'                => 'Tratamiento capilar',
                'imagen_default'        => 'TratamientoCapilar.png',
                'descripcion_default'   => 'Suministro cuidados que se aplican al cabello y cuya finalidad es mantener la salud y buena apariencia del mismo, como coloración permanente y semipermanente.'
            ]
        );

        Especialidad::updateOrInsert(
            ['id' => 7],
            [
                'id'                    => 7,
                'nombre'                => 'Depilación con cera',
                'imagen_default'        => 'DepilacionCera.png',
                'descripcion_default'   => 'Realizo el proceso de eliminación del vello desde la raíz mediante el uso de una cubierta de una sustancia pegajosa, como cera, para adherirse al vello corporal, y luego retirar esta cubierta y extraer el vello del folículo.'
            ]
        );
    }
}
