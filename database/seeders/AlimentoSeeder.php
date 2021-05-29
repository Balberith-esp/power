<?php

namespace Database\Seeders;
use App\Models\Alimento;
use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $alimentos = array(
        array('nombre' => 'Platano', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '90','tipoDieta' => 'todas',),
        array('nombre' => 'Manzana', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '40','tipoDieta' => 'todas',),
        array('nombre' => 'Leche Semi', 'tipoAlimento' => 'Lacteos', 'comida' => 'Desayuno','valorNutricional' => '80','tipoDieta' => 'todas',),
        array('nombre' => 'Avena', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '385','tipoDieta' => 'todas',),
        array('nombre' => 'Tostas', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '350','tipoDieta' => 'todas',),
        array('nombre' => 'Alubias', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '280','tipoDieta' => 'todas',),
        array('nombre' => 'Garbanzos', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '320','tipoDieta' => 'todas',),
        array('nombre' => 'Lentejas', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '345','tipoDieta' => 'todas',),
        array('nombre' => 'Arroz', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '380','tipoDieta' => 'todas',),
        array('nombre' => 'Macarrones', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '395','tipoDieta' => 'todas',),
        array('nombre' => 'Huevos', 'tipoAlimento' => 'Otro', 'comida' => 'Comida o cena','valorNutricional' => '295','tipoDieta' => 'todas',),
        array('nombre' => 'Brocoli', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '30','tipoDieta' => 'todas',),
        array('nombre' => 'Coliflor', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '45','tipoDieta' => 'todas',),
        array('nombre' => 'Judias', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '60','tipoDieta' => 'todas',),
        array('nombre' => 'Pollo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '340','tipoDieta' => 'todas',),
        array('nombre' => 'Pavo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '295','tipoDieta' => 'todas',),
        array('nombre' => 'Ternera', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '375','tipoDieta' => 'todas',),
        array('nombre' => 'Salmon', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '220','tipoDieta' => 'todas',),
        array('nombre' => 'Atun', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '360','tipoDieta' => 'todas',),
        array('nombre' => 'Sardinas', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '465','tipoDieta' => 'todas',),
        array('nombre' => 'Bacalao', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '365','tipoDieta' => 'todas',),

        array('nombre' => 'Platano', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '90','tipoDieta' => 'definicion',),
        array('nombre' => 'Manzana', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '40','tipoDieta' => 'definicion',),
        array('nombre' => 'Leche Semi', 'tipoAlimento' => 'Lacteos', 'comida' => 'Desayuno','valorNutricional' => '80','tipoDieta' => 'definicion',),
        array('nombre' => 'Avena', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '385','tipoDieta' => 'definicion',),
        array('nombre' => 'Tostas', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '350','tipoDieta' => 'definicion',),
        array('nombre' => 'Alubias', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '280','tipoDieta' => 'definicion',),
        array('nombre' => 'Garbanzos', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '320','tipoDieta' => 'definicion',),
        array('nombre' => 'Lentejas', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '345','tipoDieta' => 'definicion',),
        array('nombre' => 'Arroz', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '380','tipoDieta' => 'definicion',),
        array('nombre' => 'Macarrones', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '395','tipoDieta' => 'definicion',),
        array('nombre' => 'Huevos', 'tipoAlimento' => 'Otro', 'comida' => 'Comida o cena', 'valorNutricional' => '295','tipoDieta' => 'definicion',),
        array('nombre' => 'Brocoli', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '30','tipoDieta' => 'definicion',),
        array('nombre' => 'Coliflor', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '45','tipoDieta' => 'definicion',),
        array('nombre' => 'Judias', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '60','tipoDieta' => 'definicion',),
        array('nombre' => 'Pollo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '340','tipoDieta' => 'definicion',),
        array('nombre' => 'Pavo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '295','tipoDieta' => 'definicion',),
        array('nombre' => 'Ternera', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '375','tipoDieta' => 'definicion',),
        array('nombre' => 'Salmon', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '220','tipoDieta' => 'definicion',),
        array('nombre' => 'Atun', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '360','tipoDieta' => 'definicion',),
        array('nombre' => 'Sardinas', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '465','tipoDieta' => 'definicion',),
        array('nombre' => 'Bacalao', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '365','tipoDieta' => 'definicion',),

        array('nombre' => 'Platano', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '90','tipoDieta' => 'volumen',),
        array('nombre' => 'Manzana', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '40','tipoDieta' => 'volumen',),
        array('nombre' => 'Leche Semi', 'tipoAlimento' => 'Lacteos', 'comida' => 'Desayuno','valorNutricional' => '80','tipoDieta' => 'volumen',),
        array('nombre' => 'Avena', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '385','tipoDieta' => 'volumen',),
        array('nombre' => 'Tostas', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '350','tipoDieta' => 'volumen',),
        array('nombre' => 'Alubias', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '280','tipoDieta' => 'volumen',),
        array('nombre' => 'Garbanzos', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '320','tipoDieta' => 'volumen',),
        array('nombre' => 'Lentejas', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '345','tipoDieta' => 'volumen',),
        array('nombre' => 'Arroz', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '380','tipoDieta' => 'volumen',),
        array('nombre' => 'Macarrones', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '395','tipoDieta' => 'volumen',),
        array('nombre' => 'Huevos', 'tipoAlimento' => 'Otro', 'comida' => 'Comida o cena', 'valorNutricional' => '295','tipoDieta' => 'volumen',),
        array('nombre' => 'Brocoli', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '30','tipoDieta' => 'volumen',),
        array('nombre' => 'Coliflor', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '45','tipoDieta' => 'volumen',),
        array('nombre' => 'Judias', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '60','tipoDieta' => 'volumen',),
        array('nombre' => 'Pollo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '340','tipoDieta' => 'volumen',),
        array('nombre' => 'Pavo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '295','tipoDieta' => 'volumen',),
        array('nombre' => 'Ternera', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '375','tipoDieta' => 'volumen',),
        array('nombre' => 'Salmon', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '220','tipoDieta' => 'volumen',),
        array('nombre' => 'Atun', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '360','tipoDieta' => 'volumen',),
        array('nombre' => 'Sardinas', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '465','tipoDieta' => 'volumen',),
        array('nombre' => 'Bacalao', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '365','tipoDieta' => 'volumen',),

        array('nombre' => 'Platano', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '90','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Manzana', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '40','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Leche Semi', 'tipoAlimento' => 'Lacteos', 'comida' => 'Desayuno','valorNutricional' => '80','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Avena', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '385','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Tostas', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '350','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Alubias', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '280','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Garbanzos', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '320','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Lentejas', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '345','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Arroz', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '380','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Macarrones', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '395','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Huevos', 'tipoAlimento' => 'Otro','comida' => 'Comida o cena', 'valorNutricional' => '295','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Brocoli', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '30','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Coliflor', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '45','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Judias', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '60','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Pollo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '340','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Pavo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '295','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Ternera', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '375','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Salmon', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '220','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Atun', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '360','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Sardinas', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '465','tipoDieta' => 'mantenimiento',),
        array('nombre' => 'Bacalao', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '365','tipoDieta' => 'mantenimiento',),

        array('nombre' => 'Platano', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '90','tipoDieta' => 'perdida',),
        array('nombre' => 'Manzana', 'tipoAlimento' => 'Fruta', 'comida' => 'Almuerzo','valorNutricional' => '40','tipoDieta' => 'perdida',),
        array('nombre' => 'Leche Semi', 'tipoAlimento' => 'Lacteos', 'comida' => 'Desayuno','valorNutricional' => '80','tipoDieta' => 'perdida',),
        array('nombre' => 'Avena', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '385','tipoDieta' => 'perdida',),
        array('nombre' => 'Tostas', 'tipoAlimento' => 'Cereales', 'comida' => 'Desayuno','valorNutricional' => '350','tipoDieta' => 'perdida',),
        array('nombre' => 'Alubias', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '280','tipoDieta' => 'perdida',),
        array('nombre' => 'Garbanzos', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '320','tipoDieta' => 'perdida',),
        array('nombre' => 'Lentejas', 'tipoAlimento' => 'Legumbre', 'comida' => 'Comida o cena','valorNutricional' => '345','tipoDieta' => 'perdida',),
        array('nombre' => 'Arroz', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '380','tipoDieta' => 'perdida',),
        array('nombre' => 'Macarrones', 'tipoAlimento' => 'Pasta', 'comida' => 'Comida o cena','valorNutricional' => '395','tipoDieta' => 'perdida',),
        array('nombre' => 'Huevos', 'tipoAlimento' => 'Otro', 'comida' => 'Comida o cena', 'valorNutricional' => '295','tipoDieta' => 'perdida',),
        array('nombre' => 'Brocoli', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '30','tipoDieta' => 'perdida',),
        array('nombre' => 'Coliflor', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '45','tipoDieta' => 'perdida',),
        array('nombre' => 'Judias', 'tipoAlimento' => 'Verduras', 'comida' => 'Comida o cena','valorNutricional' => '60','tipoDieta' => 'perdida',),
        array('nombre' => 'Pollo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '340','tipoDieta' => 'perdida',),
        array('nombre' => 'Pavo', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '295','tipoDieta' => 'perdida',),
        array('nombre' => 'Ternera', 'tipoAlimento' => 'Carnes', 'comida' => 'Comida o cena','valorNutricional' => '375','tipoDieta' => 'perdida',),
        array('nombre' => 'Salmon', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '220','tipoDieta' => 'perdida',),
        array('nombre' => 'Atun', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '360','tipoDieta' => 'perdida',),
        array('nombre' => 'Sardinas', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '465','tipoDieta' => 'perdida',),
        array('nombre' => 'Bacalao', 'tipoAlimento' => 'Pescados', 'comida' => 'Comida o cena','valorNutricional' => '365','tipoDieta' => 'perdida',),
);
    public function run()
    {
        //
        foreach ($this->alimentos as $al){
            $alimento = new Alimento();
            $alimento->nombre = $al['nombre'];
            $alimento->tipoAlimento = $al['tipoAlimento'];
            $alimento->comida = $al['comida'];
            $alimento->valorNutricional =$al['valorNutricional'];
            $alimento->tipoDieta = $al['tipoDieta'];
            $alimento->save();
        }

    }
}
