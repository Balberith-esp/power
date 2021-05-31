<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        private $recursos = array(
        // Nutricion primer usuario
		array(
            'titulo' => 'ENTRENAMIENTO COMPLETO DE BÍCEPS',
            'contenido' => 'Aparte de los rangos de repeticiones, carácter de esfuerzo y el volumen total por grupo muscular, hay un punto muy importante a la hora de levantar pesas, el tipo de ejercicio. De hecho, en publicaciones bastante recientes, como en la de Fonseca y cols. (2014), se ha visto que la variación en diferentes ejercicios puede suponer una mejora en las ganancias de masa muscular por encima de otras variables.

                        Aunque en el estudio citado se saquen estas conclusiones, tenemos que tener en cuenta que no podemos poner esta variable por encima de las demás, sino que el conjunto de estas variables son las que van a marcar la diferencia.

                        Por otro lado, si queremos sacar el máximo partido a un grupo muscular en concreto, tenemos que entender que existe la hipertrofia regional.

                        Hay evidencia que sugiere que no sólo se puede hipertrofiar una parte muscular (como pueden ser cada una de las dos cabezas del bíceps), sino que también se puede hacer en porciones específicas de una parte muscular (teoría de la partición muscular). Esta hipótesis sugiere que hay partes del músculo que están inervadas por motoneuronas separadas (Wickiewicz, Roy, Powell & Edgerton, 1983).

                        Por ejemplo, en el bíceps braquial se ha visto que las fibras de la porción lateral de la cabeza larga se reclutan en mayor medida en la flexión del codo; las fibras de la porción medial más con la supinación; y las fibras que están más centradas se reclutan más en una combinación entre flexión y supinación (ter Haar Romeny, Van Der Gon & Gielen, 1984; ter Haar Romeny, Van Der Gon & Gielen, 1982).

                        ',
            'tipo' => 'ejercicio',
        ),);
    public function run()
    {
        //
    }
}
