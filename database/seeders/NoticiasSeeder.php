<?php

namespace Database\Seeders;
use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        private $noticias = array(
        // Nutricion primer usuario
		array(
            'titulo' => 'ENTRENAMIENTO COMPLETO DE BÍCEPS',
            'contenido' => 'Aparte de los rangos de repeticiones, carácter de esfuerzo y el volumen total por grupo muscular, hay un punto muy importante a la hora de levantar pesas, el tipo de ejercicio. De hecho, en publicaciones bastante recientes, como en la de Fonseca y cols. (2014), se ha visto que la variación en diferentes ejercicios puede suponer una mejora en las ganancias de masa muscular por encima de otras variables.

                        Aunque en el estudio citado se saquen estas conclusiones, tenemos que tener en cuenta que no podemos poner esta variable por encima de las demás, sino que el conjunto de estas variables son las que van a marcar la diferencia.

                        Por otro lado, si queremos sacar el máximo partido a un grupo muscular en concreto, tenemos que entender que existe la hipertrofia regional.

                        Hay evidencia que sugiere que no sólo se puede hipertrofiar una parte muscular (como pueden ser cada una de las dos cabezas del bíceps), sino que también se puede hacer en porciones específicas de una parte muscular (teoría de la partición muscular). Esta hipótesis sugiere que hay partes del músculo que están inervadas por motoneuronas separadas (Wickiewicz, Roy, Powell & Edgerton, 1983).

                        Por ejemplo, en el bíceps braquial se ha visto que las fibras de la porción lateral de la cabeza larga se reclutan en mayor medida en la flexión del codo; las fibras de la porción medial más con la supinación; y las fibras que están más centradas se reclutan más en una combinación entre flexión y supinación (ter Haar Romeny, Van Der Gon & Gielen, 1984; ter Haar Romeny, Van Der Gon & Gielen, 1982).

                        ',
            'tipo' => '0',
            'user_id' => '1',
        ),
        array(
            'titulo'=>'PRESS DE BANCA EN POWERLIFTING',
            'contenido'=>'
                Reglas de ejecución técnica
                1.- La banca se posicionará sobre la plataforma con la cabecera encarada hacia el frente o en ángulo de hasta 45 grados.

                2.- El levantador deberá tumbarse sobre su espalda con la cabeza, hombros y nalgas en contacto con la superficie de la banca. Los pies deberán estar planos sobre el suelo (tan planos como la forma del calzado permita). Manos y dedos deben agarrar la barra, posicionada en los soportes de la banca, con los pulgares en oposición. Esta posición deberá mantenerse a lo largo de todo el levantamiento. Es admisible el movimiento de los pies mientras que permanezcan planos sobre la plataforma. El cabello no debe ocultar la parte posterior de la cabeza en contacto con la banca. Es aconsejable un recogido tipo cola de caballo.

                3.- Para conseguir mejor asentamiento, el levantador puede solicitar el uso de discos planos o bloques que no excedan los 30 cm de altura sobre la plataforma y con una superficie mínima de 60 x 40 cm. En campeonatos internacionales deberán estar disponibles en alturas de 5, 10, 20 y 30 cm.

                4.- No más de cinco ni menos de dos cargadores deberán estar sobre la plataforma en todo momento. Tras colocarse correctamente, el levantador podrá servirse de los cargadores para sacar la barra de los soportes. En este caso, el levantador deberá mantener ambos brazos en extensión.

                5.- La separación entre ambas manos no excederá los 81 cm, medidos entre ambos dedos índices. Con la anchura de agarre máxima, los dedos índices deberán tapar completamente las marcas de 81 cm de la barra. El uso del agarre invertido está prohibido.

                6.- Tras sacar la barra de los soportes, con o sin la ayuda de los cargadores, el levantador deberá esperar con ambos brazos estirados y codos encajados la señal del Juez Central. La señal será dada tan pronto como el levantador permanezca inmóvil con la barra correctamente posicionada. Por razones de seguridad, el levantador podrá ser requerido a devolver la barra a los soportes con la voz “Replace” (o “Soporte”), acompañado de un movimiento hacia atrás del brazo, si tras un periodo de cincos segundos no está en la posición correcta para iniciar el movimiento. Entonces, el Juez Central informará de la razón por la que la señal no fue dada.

                7.- La señal para iniciar el intento consistirá en un movimiento hacia abajo del brazo acompañado de la voz “Start” (o “Inicio”).

                8.- Tras recibir la señal, el levantador deberá descender la barra al pecho o la zona abdominal (sin que la barra toque el cinturón) y mantenerla inmóvil, tras lo cual, el Juez Central dará la voz de “Press”. Entonces, el levantador deberá subir la barra hasta la completa extensión de ambos brazos y codos encajados. En cuanto permanezca inmóvil en esta posición, la voz de “Rack” (o “Soporte”) será dada, acompañada con un movimiento hacia atrás del brazo. Si la barra es bajada al cinturón durante 5 segundos el Juez Central dará la orden “Replace”.',
            'tipo' => '0',
            'user_id' => '1',
        ),
        array(
            'titulo'=>'LA SENTADILLA EN POWERLIFTING',
            'contenido'=>'
                Reglas de ejecución técnica
                1.- El levantador se encarará hacia el frontal de la plataforma. La barra deberá ser sostenida horizontalmente sobre los hombros, con agarre de las manos y dedos. Las manos pueden situarse en cualquier posición sobre la barra, incluso en contacto con los collarines interiores.

                2.- Tras sacar la barra de los soportes (pudiendo ser ayudado por los cargadores) el levantador retrocederá hasta establecer su posición inicial. Cuando el levantador esté quieto, erguido (una pequeña desviación es tolerable) y con las rodillas encajadas, el Juez Central dará la señal de inicio del levantamiento. La señal consistirá en un movimiento descendente del brazo con la voz de “Squat” (o “Inicio”). Tras recibir la señal, el levantador podrá realizar correcciones en su posición (dentro de las reglas) sin penalización. Por razones de seguridad, el levantador será requerido con la voz de “Replace” (o “Soporte”) acompañado de un movimiento de retroceso del brazo, si tras un periodo de cinco segundos no estuviera en la posición correcta para iniciar el levantamiento. El Juez Central deberá indicar entonces la razón por la que la señal no fue dada.

                3.- Tras recibir la señal del Juez Central, el levantador deberá doblar las rodillas y descender hasta que la cara anterior de la pierna, junto a la articulación de la cadera quede por debajo de la parte superior de la rodilla. Está permitido un único intento. Se entenderá como inicio del intento, cuando el levantador desencaje las rodillas.

                4.- El levantador deberá entonces recuperar la posición erguida con las rodillas encajadas. No está permitido doble rebote en la parte baja del levantamiento ni ningún movimiento de descenso. Cuando el levantador permanezca quieto (en aparente posición final,) el Juez Central dará la señal para retornar la barra al soporte.

                5.- La señal para retornar la barra al soporte, consistirá en un movimiento de retroceso del brazo con la voz de “Rack” (o “Soporte”). El levantador deberá entonces retornar la barra. Movimiento de pies tras recibir esta señal no será causa de nulo. Por razones de seguridad, el levantador podrá requerir la ayuda de los cargadores para devolver la barra al soporte. El levantador deberá permanecer bajo la barra durante todo el proceso.

                6.-  En todo momento, habrá entre 2 y 5 cargadores sobre la plataforma. Los Jueces decidirán en cada caso el número de cargadores necesarios en la plataforma (2, 3, 4 ó 5).',
            'tipo' => '0',
            'user_id' => '1',
        ),
        array(
            'titulo'=>'La dieta keto es segura y puede mantenerse en el tiempo, pero el control de la cetosis es clave',
            'contenido'=>'Las dietas cetogénicas o que incentivan la cetosis reduciendo al máximo la ingesta de hidratos son muy empleadas para incentivar la quema de grasas y así, promover el adelgazamiento. Sin embargo, su seguridad y eficacia cuando se realizan a largo plazo son habitualmente cuestionadas. Tras una revisión de la literatura científica al respecto podemos señalar que la dieta keto es segura y puede mantenerse en el tiempo, pero el control de la cetosis es clave.',
            'tipo' => '1',
            'user_id' => '1',
        ),
        array(
            'titulo'=>'¿Qué es la dieta hiperproteica?',
            'contenido'=>'
                La dieta hiperproteica o dieta de las proteínas, como su propio nombre indica, se basa en un aumento del consumo de alimentos ricos en proteínas como las carnes, los pescados, algunas legumbres y los huevos, pero siempre excluyendo aquellos alimentos ricos en carbohidratos como el pan y la pasta.
                Indudablemente, ingerir más proteínas y disminuir el porcentaje de grasas de la dieta recomendada por la OMS también te librará de algunas calorías responsables de esos kilos de más. El principal beneficio de la dieta hiperproteica ayuda a disminuir el hambre y a aumentar la sensación de saciedad, sobre todo porque afecta a los niveles de la grelina y otras hormonas que se encargan de regular el apetito.',
            'tipo' => '1',
            'user_id' => '1',
        ),
    );
    public function run()
    {
        //
        foreach ($this->noticias as $not){
            $noticia = new noticia();
            $noticia->titulo = $not['titulo'];
            $noticia->user_id = $not['user_id'];
            $noticia->contenido = $not['contenido'];
            $noticia->tipo = $not['tipo'];
            $noticia->save();
        }
    }
}
