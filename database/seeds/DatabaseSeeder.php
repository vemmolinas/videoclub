<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\User;

class DatabaseSeeder extends Seeder
{

  private $arrayPeliculas = array(
    array(
      'title' => 'El padrino',
      'year' => '1972',
      'rating' => '9,2',
      'director' => 'Francis Ford Coppola',
      'poster' => 'https://es.web.img3.acsta.net/pictures/18/06/12/12/12/0117051.jpg',
      'rented' => false,
      'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.',
    ),
    array(
      'title' => 'El Padrino. Parte II',
      'year' => '1974',
      'rating' => '9,0',
      'director' => 'Francis Ford Coppola',
      'poster' => 'https://elcriticoabulico.files.wordpress.com/2015/01/el-padrino-parte-ii.jpg',
      'rented' => false,
      'synopsis' => 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.',
    ),
    array(
      'title' => 'La lista de Schindler',
      'year' => '1993',
      'rating' => '8,9',
      'director' => 'Steven Spielberg',
      'poster' => 'https://images-eu.ssl-images-amazon.com/images/I/51kIArG7kzL.jpg',
      'rented' => false,
      'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.',
    ),
    array(
      'title' => 'Pulp Fiction',
      'year' => '1994',
      'rating' => '8,9',
      'director' => 'Quentin Tarantino',
      'poster' => 'https://www.yaconic.com/wp-content/uploads/2019/09/pulp-fiction-748x1024.jpg',
      'rented' => true,
      'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín. ',
    ),
    array(
      'title' => 'Cadena perpetua',
      'year' => '1994',
      'rating' => '9,3',
      'director' => 'Frank Darabont',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
      'rented' => true,
      'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.',
    ),
    array(
      'title' => 'El golpe',
      'year' => '1973',
      'rating' => '8,3',
      'director' => 'George Roy Hill',
      'poster' => 'https://es.web.img3.acsta.net/pictures/14/03/27/13/16/401621.jpg',
      'rented' => false,
      'synopsis' => 'Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster (Robert Shaw). Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.',
    ),
    array(
      'title' => 'La vida es bella',
      'year' => '1997',
      'rating' => '8,6',
      'director' => 'Roberto Benigni',
      'poster' => 'https://tienda.encristiano.com/2739-home_default/la-vida-es-bella.jpg',
      'rented' => true,
      'synopsis' => 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intención de abrir una librería. Allí conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego.',
    ),
    array(
      'title' => 'Uno de los nuestros',
      'year' => '1990',
      'rating' => '8,7',
      'director' => 'Martin Scorsese',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BY2NkZjEzMDgtN2RjYy00YzM1LWI4ZmQtMjIwYjFjNmI3ZGEwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX667_CR0,0,667,999_AL_.jpg',
      'rented' => false,
      'synopsis' => 'Henry Hill, hijo de padre irlandés y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gángsters de su barrio, donde la mayoría de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece años, Henry decide abandonar la escuela y entrar a formar parte de la organización mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irá subiendo de categoría. ',
    ),
    array(
      'title' => 'Alguien voló sobre el nido del cuco',
      'year' => '1975',
      'rating' => '8,7',
      'director' => 'Milos Forman',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BZjA0OWVhOTAtYWQxNi00YzNhLWI4ZjYtNjFjZTEyYjJlNDVlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,672,1000_AL_.jpg',
      'rented' => false,
      'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico. La inflexible disciplina del centro acentúa su contagiosa tendencia al desorden, que acabará desencadenando una guerra entre los pacientes y el personal de la clínica con la fría y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellón está en juego.',
    ),
    array(
      'title' => 'American History X',
      'year' => '1998',
      'rating' => '8,5',
      'director' => 'Tony Kaye',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BZjA0MTM4MTQtNzY5MC00NzY3LWI1ZTgtYzcxMjkyMzU4MDZiXkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_.jpg',
      'rented' => false,
      'synopsis' => 'Derek (Edward Norton), un joven "skin head" californiano de ideología neonazi, fue encarcelado por asesinar a un negro que pretendía robarle su furgoneta. Cuando sale de prisión y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeño (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a él lo condujo a la cárcel.',
    ),
    array(
      'title' => 'Sin perdón',
      'year' => '1992',
      'rating' => '8,2',
      'director' => 'Clint Eastwood',
      'poster' => 'https://es.web.img2.acsta.net/pictures/15/10/23/15/45/106018.jpg',
      'rented' => false,
      'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades económicas para sacar adelante a su hijos. Su única salida es hacer un último trabajo. En compañía de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrá que matar a dos hombres que cortaron la cara a una prostituta.',
    ),
    array(
      'title' => 'El precio del poder',
      'year' => '1983',
      'rating' => '8,3',
      'director' => 'Brian De Palma',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BNjdjNGQ4NDEtNTEwYS00MTgxLTliYzQtYzE2ZDRiZjFhZmNlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
      'rented' => false,
      'synopsis' => 'Tony Montana es un emigrante cubano frío y sanguinario que se instala en Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la cúpula de una organización de narcos.',
    ),
    array(
      'title' => 'El pianista',
      'year' => '2002',
      'rating' => '8,5',
      'director' => 'Roman Polanski',
      'poster' => 'https://es.web.img2.acsta.net/pictures/14/05/27/12/07/438875.jpg',
      'rented' => true,
      'synopsis' => 'Wladyslaw Szpilman, un brillante pianista polaco de origen judío, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportación gracias a la ayuda de algunos amigos. Pero tendrá que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendrá que afrontar constantes peligros.',
    ),
    array(
      'title' => 'Seven',
      'year' => '1995',
      'rating' => '8,6',
      'director' => 'David Fincher',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BOTUwODM5MTctZjczMi00OTk4LTg3NWUtNmVhMTAzNTNjYjcyXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,639,1000_AL_.jpg',
      'rented' => true,
      'synopsis' => 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, está a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrán que colaborar en la resolución de una serie de asesinatos cometidos por un psicópata que toma como base la relación de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las víctimas, sobre los que el asesino se ensaña de manera impúdica, se convertirán para los policías en un enigma que les obligará a viajar al horror y la barbarie más absoluta.',
    ),
    array(
      'title' => 'El silencio de los corderos',
      'year' => '1991',
      'rating' => '8,6',
      'director' => 'Jonathan Demme',
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/61DMhNjjJ3L._SY445_.jpg',
      'rented' => false,
      'synopsis' => 'El FBI busca a "Buffalo Bill", un asesino en serie que mata a sus víctimas, todas adolescentes, después de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psicópatas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la cárcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misión será intentar sacarle información sobre los patrones de conducta de "Buffalo Bill".',
    ),
    array(
      'title' => 'La naranja mecánica',
      'year' => '1971',
      'rating' => '8,3',
      'director' => 'Stanley Kubrick',
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41iUUbzNX2L._AC_SY400_.jpg',
      'rented' => false,
      'synopsis' => 'Gran Bretaña, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos más salvajes apaleando, violando y aterrorizando a la población. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisión, se someterá voluntariamente a una innovadora experiencia de reeducación que pretende anular drásticamente cualquier atisbo de conducta antisocial.',
    ),
    array(
      'title' => 'La chaqueta metálica',
      'year' => '1987',
      'rating' => '8,3',
      'director' => 'Stanley Kubrick',
      'poster' => 'https://m.media-amazon.com/images/M/MV5BNzkxODk0NjEtYjc4Mi00ZDI0LTgyYjEtYzc1NDkxY2YzYTgyXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
      'rented' => true,
      'synopsis' => 'Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. Allí está el sargento Hartman, duro e implacable, cuya única misión en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los jóvenes están preparados para soportar sus métodos. ',
    ),
    array(
      'title' => 'Blade Runner',
      'year' => '1982',
      'rating' => '8,1',
      'director' => 'Ridley Scott',
      'poster' => 'https://los40es00.epimg.net/los40/imagenes/2019/11/05/cinetv/1572948980_872493_1572949331_noticia_normal.jpg',
      'rented' => true,
      'synopsis' => 'A principios del siglo XXI, la poderosa Tyrell Corporation creó, gracias a los avances de la ingeniería genética, un robot llamado Nexus 6, un ser virtualmente idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. Después de la sangrienta rebelión de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de policía, los Blade Runners, tenían órdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecución, se le llamaba "retiro". ',
    ),
    array(
      'title' => 'Taxi Driver',
      'year' => '1976',
      'rating' => '8,3',
      'director' => 'Martin Scorsese',
      'poster' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Taxi_driver_movieposter.jpg',
      'rented' => false,
      'synopsis' => 'Para sobrellevar el insomnio crónico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los demás, se pasa los días en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campaña política. Pero lo que realmente obsesiona a Travis es comprobar cómo la violencia, la sordidez y la desolación dominan la ciudad. Y un día decide pasar a la acción.',
    ),
    array(
      'title' => 'El club de la lucha',
      'year' => '1999',
      'rating' => '8,8',
      'director' => 'David Fincher',
      'poster' => 'https://es.web.img2.acsta.net/medias/nmedia/18/69/04/88/20140966.jpg',
      'rented' => true,
      'synopsis' => 'Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrá un éxito arrollador.',
    ),
  );


  private $arrayUsers = array(
    array(
      'name' => 'USUARIO1',
      'email' => 'user1@gmail.com',
      'email_verified_at' => null,
      'password' => '$2y$10$jpopbQWKRMUbVwQIEwQEj.Zn4qVpoMczr4B5fCcYrV2Nyb.hFcdhS',
    ),
    array(
      'name' => 'USUARIO2',
      'email' => 'user2@gmail.com',
      'email_verified_at' => null,
      'password' => '$2y$10$eSZmHPJsHjIfOfvT85Qt/uoSykZne0dFYoD8.3bntC8Yi3twKz.Wy',
    ),

  );


  public function seedUsers()
  {
    DB::table('users')->delete();
    foreach ($this->arrayUsers as $user) {
      $u = new User;
      $u->name = $user['name'];
      $u->email = $user['email'];
      $u->email_verified_at = $user['email_verified_at'];
      $u->password = $user['password'];
      $u->save();
    }
  }


  public function seedCatalog()
  {
    DB::table('movies')->delete();
    foreach ($this->arrayPeliculas as $pelicula) {
      $p = new Movie;
      $p->title = $pelicula['title'];
      $p->year = $pelicula['year'];
      $p->rating = $pelicula['rating'];
      $p->director = $pelicula['director'];
      $p->poster = $pelicula['poster'];
      $p->rented = $pelicula['rented'];
      $p->synopsis = $pelicula['synopsis'];
      $p->save();
      // $this->command->info('Tabla de películas rellenada correctamente!');
    }
  }


  public function run()
  {
    self::seedUsers();
    self::seedCatalog();
    $this->command->info('Tabla catálogo inicializada con datos!');
  }
}
