-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-03-2024 a las 17:51:20
-- Versión del servidor: 8.0.36-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_category`
--

CREATE TABLE `tbl_category` (
  `tbl_category_id` int NOT NULL,
  `category_name` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_category`
--

INSERT INTO `tbl_category` (`tbl_category_id`, `category_name`) VALUES
(1, 'Desayuno'),
(2, 'Almuerzo'),
(3, 'Cena'),
(4, 'Aperitivo'),
(7, 'Postre'),
(8, 'Comida rápida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recipe`
--

CREATE TABLE `tbl_recipe` (
  `tbl_recipe_id` int NOT NULL,
  `tbl_category_id` int NOT NULL,
  `recipe_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `recipe_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `recipe_ingredients` text COLLATE utf8mb4_general_ci NOT NULL,
  `recipe_procedure` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_recipe`
--

INSERT INTO `tbl_recipe` (`tbl_recipe_id`, `tbl_category_id`, `recipe_image`, `recipe_name`, `recipe_ingredients`, `recipe_procedure`) VALUES
(1, 1, 'frenchtoast.jpg', 'Tostada francesa', '- 4 huevos grandes\n- 2/3 taza de leche\n- 2 cucharaditas de canela\n- Nuez moscada pizca\n- 8 rebanadas gruesas de pan italiano ligeramente duro de ¾ de pulgada\n- 2 cucharadas de mantequilla derretida o aceite neutro\n- Jarabe de arce, mantequilla, fruta y azúcar glass para servir', '1. Batir los huevos, la leche, la canela y la nuez moscada en un tazón mediano. \r\n\r\nAñade otras especias o condimentos en este momento; \r\n\r\nPuedes agregar una pizca de cardamomo molido o pimienta de Jamaica si lo deseas para darle un toque extra. Batir la mezcla de huevo hasta que esté bien mezclada y verter en un tazón ancho y poco profundo o en un molde para pasteles.\r\n\r\n2. Coloque cada rebanada de pan en la mezcla de huevo, sumergiendo el pan y dejándolo en remojo durante 1 minuto.\r\n\r\n3. Derrita la mantequilla en una sartén grande a fuego medio-alto. Levante el pan de la mezcla de huevo y deje escurrir el exceso de huevo antes de colocar el pan en la sartén. Fríe las tostadas francesas hasta que se doren por un lado, aproximadamente 2 minutos. Voltee y dore por el otro lado, aproximadamente 2 minutos. Repita con el pan restante. Sirva las tostadas francesas calientes con mantequilla, jarabe de arce y/o bayas frescas u otras frutas. Espolvoree con azúcar glass si lo desea.'),
(5, 1, 'Croque Madame.jpg', 'Madame croque', '- 4 rebanadas de pan de sándwich blanco firme y de buena calidad (1/2 pulgada de grosor)', '1. Precaliente el horno para asar con una rejilla a unas 8 pulgadas de la fuente de calor. Calienta una sartén antiadherente grande a fuego medio-alto. Unte 1 lado de las rebanadas de pan de manera uniforme con 1 cucharada de mantequilla. Coloque las rebanadas de pan, con el lado untado con mantequilla hacia abajo, en una sartén; cocine hasta que esté tostado y dorado, de 2 a 4 minutos. Transfiera el pan a una superficie de trabajo. Limpia la sartén.\r\n2. Derrita 1 cucharada de mantequilla en una cacerola pequeña a fuego medio hasta que esté espumosa. Incorpora la harina; cocine, batiendo constantemente, hasta que esté ligeramente dorado, aproximadamente 1 minuto y 30 segundos. Incorpora poco a poco la leche; llevar a fuego lento a fuego medio, batiendo constantemente. Reduzca el fuego a bajo; cocine, batiendo con frecuencia, hasta que espese, aproximadamente 3 minutos. Alejar del calor. Agrega 1/4 taza de Gruyère rallado y bate hasta que se derrita. Agrega sal, pimienta y nuez moscada a la salsa Mornay. (Si no la usa inmediatamente, cubra la superficie de la salsa directamente con una envoltura de plástico por hasta 1 hora).\r\n3. Coloque 2 de las rebanadas de pan sobre una superficie de trabajo, con el lado tostado hacia abajo. En cada rebanada, esparza 2 cucharadas de salsa Mornay de manera uniforme para cubrir la superficie. Espolvorea con 1/4 taza de gruyere rallado y cubre con 2 rebanadas de jamón. Unte la mostaza de manera uniforme sobre los lados sin tostar de las 2 rebanadas de pan restantes; colóquelo, con la mostaza hacia abajo, encima de las rebanadas cubiertas de jamón. Unte el resto de la salsa Mornay de manera uniforme sobre los sándwiches y luego cubra con el 1/4 de taza restante de gruyere rallado.\r\n\r\n4. Transfiera los sándwiches a una bandeja para hornear con borde y ase en el horno precalentado hasta que el queso se derrita y la parte superior burbujee y se dore en algunas partes, de 5 a 7 minutos.\r\n5. Mientras tanto, derrita la cucharada de mantequilla restante en una sartén antiadherente limpia a fuego medio-alto. Rompe los huevos en una sartén; cocine, sin tocar, hasta que las claras estén cuajadas pero las yemas líquidas, aproximadamente 3 minutos.\r\n6. Cubra cada sándwich con un huevo frito; decore con cebollino, sal marina en escamas y pimienta adicional.'),
(6, 1, 'Egg Bhurji.jpg', 'Huevo Bhurji', '- 2 cucharadas de ghee o mantequilla- ½ cup chopped onion\r\n- 2 teaspoons 1finely chopped green chile\r\n- 1 teaspoon grated peeled fresh ginger\r\n- 1 teaspoon finely chopped garlic\r\n- ½ cup chopped tomatoes\r\n- 1 teaspoon ground coriander\r\n- ½ teaspoon ground turmeric powder\r\n- ½ teaspoon garam masala\r\n- ½ teaspoon kashmiri chile powder or other red chile powder\r\n- Kosher salt to taste\r\n- 4 large eggs, lightly beaten\r\n- 1 teaspoon fresh lemon juice\r\n- 2 tablespoons chopped fresh cilantro, for serving', '1. En una sartén mediana, caliente el ghee a fuego medio. Agregue la cebolla, el chile, el jengibre y el ajo y cocine, revolviendo con frecuencia, hasta que las cebollas estén traslúcidas, aproximadamente 4 minutos. \r\n2. Agregue los tomates y las especias y cocine, revolviendo con frecuencia, hasta que las especias estén tostadas y los tomates se ablanden, de 2 a 3 minutos.'),
(7, 1, 'Eggs Benedict Toast.jpg', 'Tostadas Benedict De Huevos', '- 3 yemas de huevo grandes\n- 1 cucharada de agua fría\n- 1 cucharadita de maicena\n- 1 cucharadita de mostaza Dijon\n- 1 ½ cucharadas de jugo de limón fresco, cantidad dividida\n- 1 cucharadita de sal kosher, cantidad dividida\n- 12 cucharadas de mantequilla sin sal (6 onzas), derretida, más 2 cucharadas de mantequilla fría sin sal, cantidad dividida\n- ⅛ cucharadita de pimienta de cayena\n- Agua tibia, según sea necesario\n- 4 huevos grandes fríos\n- 4 rebanadas de pan de masa madre (1/2 pulgada de grosor), tostadas\n- 8 rebanadas finas de prosciutto o speck (aproximadamente 4 onzas)\n- 2 cucharadas de hierbas suaves frescas picadas (como estragón y cebollino)\n- Pimienta negra recién molida (opcional)', '1. Batir las yemas de huevo en una cacerola pequeña hasta que queden suaves, aproximadamente 1 minuto. Agrega 1 cucharada de agua fría, maicena, Dijon, 1 cucharada de jugo de limón y 1/2 cucharadita de sal; batir hasta que esté bien combinado. Prepare un recipiente con agua helada lo suficientemente grande como para sumergir el fondo de la cacerola; dejar de lado.'),
(8, 1, 'Cinnamon Pancake.jpg', 'Panqueques De Canela', '- 1 1/4 tazas de harina para todo uso', '1. En un bol batir la harina con la harina de maíz, el azúcar, la canela, el polvo para hornear, el bicarbonato y la sal. En un bol batir el buttermilk con los huevos, el aceite de oliva y el agua. Batir los ingredientes líquidos con los ingredientes secos, dejando pequeños grumos.'),
(9, 2, 'lunch1.jpg', 'Katsu Sando', '- 6 hamburguesas crujientes CDO\n- 3 rebanadas de pan sabroso cortadas por la mitad\n- 1 taza de repollo rallado\n- 1/4 taza de salsa katsu\n- 3 cucharadas de mantequilla\n- 2 cucharadas de aceite de cocina\n- 3 cucharadas de mayonesa', '1. Calienta el aceite de cocina en una sartén. Freír ambos lados de las hamburguesas CDO Crispy a fuego medio hasta que estén crujientes. Dejar de lado\n2. Coge 2 rebanadas de pan. Unte mantequilla en un lado de la primera rebanada de pan y mayonesa en un lado de la segunda rebanada de pan.\n3. Coloque la rebanada de pan con mantequilla sobre una superficie plana (con la mantequilla hacia arriba). Cubra con repollo rallado y salsa tonkatsu.\n4. Coloque 2 CDO Crispy Burgers encima y luego cubra con más repollo rallado y salsa tonkatsu. Termine cubriendo con la otra rebanada de pan (con el lado de la mayonesa hacia abajo).\n5. Coloque el Crispy Burger Sando en un plato para servir. Atender. ¡Comparte y Disfruta!'),
(10, 2, 'Igado.jpg', 'Igado', '- 1/2 libra. lomo de cerdo cortado en tiras de 2 pulgadas\r\n- 1/2 libra de hígado de cerdo cortado en tiras de 2 pulgadas\r\n- 1/2 libra de riñón de cerdo\r\n- 1 Cubo de Cerdo Knorr\r\n- 1 pimiento rojo cortado en tiras\r\n- 1/2 taza de guisantes\r\n- 1 zanahoria en juliana\r\n- 3 hojas de laurel\r\n- 1 cebolla picada\r\n- 5 dientes de ajo picados\r\n- 6 cucharadas de salsa de soja\r\n- 5 cucharadas de vinagre blanco\r\n- 1 1/4 taza de agua\r\n- 4 cucharadas de aceite de cocina\r\n- Sal y pimienta para probar', '1. Hervir el riñón con 4 pulgares de jengibre durante al menos 30 minutos. Déjelo enfriar y córtelo en tiras de 2 pulgadas. Dejar de lado.\r\n2. Calienta 2 cucharadas de aceite de cocina en una sartén. Saltear el hígado de cerdo durante 2 minutos. Retirar de la sartén y reservar.\r\n3.Vierta el aceite restante en la sartén. Una vez caliente, sofreír el ajo y la cebolla hasta que se ablanden.\r\n4. Añade el riñón de cerdo. Cocine por 1 minuto.\r\n5. Añade el lomo de cerdo. Saltee hasta que la capa exterior adquiera un color marrón claro.\r\n6. Vierta la salsa de soja y el vinagre en la sartén. Deja que el líquido hierva. Remover.\r\n7. Agrega las hojas de laurel y vierte agua. Dejar hervir. Reduzca el fuego entre bajo y medio. Continuar cocinando durante 40 minutos.\r\n8. Agregue el cubo de cerdo Knorr. Cocine por 8 minutos.\r\n9. Vuelva a agregar el hígado a la sartén. Revuelva y continúe cocinando por 3 minutos.\r\n10. Ponga el pimiento morrón, la zanahoria y los guisantes.\r\n11. Sazone con sal y pimienta negra molida. Cocine por 2 minutos. Transfiera a un tazón para servir. Servir caliente con arroz.\r\n12. ¡Comparte y disfruta!'),
(11, 2, 'Pork Adobo.jpg', 'Pork Adobo', '- 2 libras de panceta de cerdo (nota 1)\n- 2 cucharadas de ajo (nota 2)\n- 5 hojas de laurel secas (nota 3)\n- 4 cucharadas de vinagre (nota 4)\n- 1/2 taza de salsa de soja (nota 5)\n- 1 cucharada de pimienta en grano (nota 6)\n- 2 tazas de agua\n- Sal al gusto', '1. Combine la panceta de cerdo, la salsa de soja y el ajo y luego deje marinar durante al menos 1 hora.\n2. Calentar la olla y poner la panceta de cerdo marinada y cocinar por unos minutos.\n3. Vierta el resto de la marinada, incluido el ajo.\n4. Agregue agua, pimienta entera y hojas de laurel secas y luego deje hervir. Cocine a fuego lento durante 40 minutos a 1 hora.\n5. Agregue el vinagre y cocine a fuego lento durante 12 a 15 minutos.\n6. Agrega sal al gusto\n7. Servir caliente. ¡Comparte y Disfruta!'),
(12, 2, 'Chicken Curry.jpg', 'Pollo al curry', '- 2 libras. pollo cortado en trozos para servir\n- 1 cucharada de curry en polvo\n- 1 pieza de papa en cubitos\n- 4 dientes de ajo picados\n- 2 tallos de apio cortados en rodajas\n- 1 pieza de pimiento rojo en rodajas\n- 2 piezas de pimiento verde largo\n- 1 pieza de cebolla picada\n- 2 pulgares de jengibre cortados en tiras\n- 2 tazas de leche de coco\n- 1/2 taza de crema para todo uso opcional\n- 1 taza de agua\n- salsa de pescado y pimienta negra molida al gusto', '1. Calentar aceite en una sartén. Freír las patatas durante 1 minuto por lado. Retirar de la sartén. Dejar de lado.\n2. Con el aceite restante, saltee el ajo, la cebolla, el apio y el jengibre hasta que la cebolla se ablande.\n3. Agrega los trozos de pollo. Saltee hasta que la parte exterior del pollo adquiera un color marrón claro.\n4. Agrega 1 cucharada de salsa de pescado. Continúe salteando durante 1 minuto.\n5. Vierta la leche de coco y el agua. Dejar hervir.\n6. Agregue el curry en polvo. Revuelva hasta que el polvo esté completamente diluido. Tapa la olla y continúa cocinando a fuego medio bajo hasta que el líquido se reduzca a la mitad.\n7. Agregue el pimiento rojo y las patatas fritas. Cocine por 5 minutos.\n8. Sazone con salsa de pescado y pimienta negra molida según sea necesario. También puedes agregar crema para todo uso si lo deseas.\n9. Transfiera a un tazón para servir. ¡Servir y disfrutar!'),
(13, 2, 'Bulalo.jpg', 'Bulalo', '- 2 libras de pierna de res\n- ½ hoja entera de col desprendida individualmente\n- 1 paquete de bok choy\n- 2 mazorcas de maíz cada una cortadas en 3 partes\n- 2 Cucharadas de pimienta entera\n- 1/2 taza de cebollas verdes cortadas en trozos de 1 1/2 pulgada\n- 1 cebolla\n- 3/4 onzas de agua\n- salsa de pescado al gusto opcional', '1. En una olla grande, vierta agua y deje hervir.\n2. Coloque la pierna de res seguida de la cebolla y el pimiento entero y luego cocine a fuego lento durante 1,5 horas (30 minutos si usa una olla a presión) o hasta que la carne esté tierna.\n3. Agrega el maíz y cocina a fuego lento por otros 10 minutos.\n4. Agrega la salsa de pescado, el repollo, el pechay y la cebolla de verdeo (puerros encebollados).\n5. Sirva caliente. ¡Comparte y Disfruta!'),
(14, 3, 'Chicken and Broccoli Alfredo.jpg', 'Chicken Alfredo', '- 8 onzas de fettuccine, crudo\n- 2 tazas de floretes de brócoli frescos\n- ¼ de taza de aderezo italiano Kraft Zesty\n- 1 libra de pechugas de pollo deshuesadas y sin piel, cortadas en trozos pequeños\n- 1 ⅔ tazas de leche\n- 4 onzas de queso crema Philadelphia, en cubos\n- ¼ taza de queso parmesano rallado Kraft\n- ½ cucharadita de hojas secas de albahaca', '1. Cocine la pasta como se indica en el paquete, agregando el brócoli al agua hirviendo durante los últimos 2 minutos del tiempo de cocción de la pasta. Escurrir la mezcla de pasta.\n2. Mientras tanto, caliente el aderezo en una sartén antiadherente grande a fuego medio-alto. Agregue el pollo y cocine hasta que ya no esté rosado en el centro, revolviendo ocasionalmente, aproximadamente de 5 a 7 minutos.\n3. Agregue la leche, el queso crema, el queso parmesano y la albahaca. Hacer hervir removiendo constantemente. Cocine hasta que la salsa esté bien mezclada y bien caliente, aproximadamente de 1 a 2 minutos.\n4. Agrega la mezcla de pollo a la mezcla de pasta; mezclar ligeramente.'),
(15, 3, 'Chicken Bhuna.jpg', 'Chicken Bhuna', '- 2 cucharadas de aceite vegetal\n- 3 cebollas medianas, finamente picadas\n- 1 cucharadita de sal\n- 4 dientes de ajo machacados\n- 1 cucharada de jengibre fresco picado\n- 1/4 taza de agua caliente\n- 1 cucharadita de chile en polvo\n- 1 cucharadita de cilantro molido\n- 1 cucharadita de comino molido\n- 1/2 cucharadita de cúrcuma molida\n- 2 tomates medianos, picados\n- 2 chiles verdes, cortados por la mitad a lo largo (Opcional)\n- 2 mitades de pechuga de pollo deshuesadas y sin piel, cortadas en cubos\n- 1 cucharadita de pasta de curry, como la de Patak\n- 1/4 taza de hojas de cilantro fresco, picadas', '1. Calienta el aceite en una sartén antiadherente a fuego alto. Agrega la cebolla y la sal; cocine y revuelva hasta que la cebolla se ablande, aproximadamente 5 minutos.\n2. Reduzca el fuego a bajo; agregue el ajo y el jengibre hasta que estén fragantes. Agrega agua caliente; tape y cocine, revolviendo ocasionalmente, hasta que el agua se haya evaporado, aproximadamente 5 minutos.\n3. Agregue el chile en polvo, el cilantro molido, el comino y la cúrcuma; cocine y revuelva a fuego alto hasta que las especias estén tostadas, aproximadamente 5 minutos. Agrega los tomates y los chiles verdes; tape y cocine a fuego lento durante 5 minutos.\n4. Agrega el pollo; cocine y revuelva a fuego alto hasta que se dore, de 5 a 7 minutos. Agrega la pasta de curry; reduzca el fuego a bajo, cubra y cocine hasta que el pollo esté bien cocido, agregando un poco de agua si es necesario, aproximadamente 5 minutos. Comprobar sazón y espolvorear con cilantro recién picado.'),
(16, 3, 'Corned Beef.jpeg', 'Corned Beef', '- 1 (5 1/2 libras) de pechuga de res en conserva con paquete de especias\n- 7 patatas pequeñas, peladas y cortadas en cubitos\n- 4 zanahorias medianas, peladas y cortadas en cubitos\n- 1 cebolla mediana, picada\n- 3 dientes de ajo, picados', '1. Precalienta el horno a 300 grados F (150 grados C).\n2. Coloque la pechuga de carne en conserva en el centro de una fuente para asar. Coloque las papas y las zanahorias a los lados, luego esparza la cebolla y el ajo por encima. Espolvoree el paquete de condimentos sobre la carne y luego vierta agua hasta que las papas estén casi cubiertas. Cubra con una tapa o papel de aluminio grueso.\n3. Ase en el horno precalentado hasta que la carne en conserva esté tan tierna que se pueda desmenuzar con un tenedor, aproximadamente de 5 a 6 horas.'),
(17, 4, 'Frito Pie.jpeg', 'Frito Pie', '- 1/2 libra de carne molida\n- 1/4 taza de agua\n- 1 cucharada de pasta de tomate\n- 1 cucharada de chile en polvo o al gusto\n- 1/2 cucharadita de comino molido\n- 1/4 cucharadita de cebolla en polvo\n- 1/4 cucharadita de ajo en polvo\n- 1/4 taza de frijoles con chile', '1. Calienta una sartén grande a fuego medio-alto. Cocine y revuelva la carne molida en la sartén caliente hasta que se dore y se desmorone, de 5 a 7 minutos. Escurrir y desechar la grasa. Agregue el agua, la pasta de tomate, el chile en polvo, el comino, la cebolla en polvo y el ajo en polvo. Agrega los frijoles; cocine hasta que esté completamente caliente, aproximadamente 3 minutos.\n2. Divida los chips de maíz en 4 tazones, cubra con la mezcla de chile y luego espolvoree con cebolla picada, rodajas de jalapeño y queso cheddar. Servir inmediatamente.'),
(18, 4, 'Meatball Crackers.jpg', 'Meatball Crackers', '- 1/2 libra de solomillo molido\n- 2 cucharadas de cebolla picada\n- 1 diente de ajo picado\n- 3 cucharadas de leche o mitad y mitad\n- 1 cucharadita de sal kosher\n- 1/2 cucharadita de pimienta negra recién molida\n- 1 cucharadita de albahaca seca\n- 1/2 cucharadita de orégano seco\n- 1 huevo grande, ligeramente batido', '1. Precalienta el horno a 325 grados F (165 grados C).\n2. Combine el solomillo, la cebolla, el ajo, la leche, la sal, la pimienta, la albahaca, el orégano y el huevo en un bol y mezcle. Agregue el pan rallado hasta que esté bien combinado. carne para untar\nMezcle en una capa fina uniformemente sobre 24 galletas. Cubra con una rodaja de queso mozzarella y una segunda galleta.\n3. Coloque las galletas en una bandeja para hornear y unte la parte superior uniformemente con aceite de oliva.\nHornee en el horno precalentado hasta que la carne esté dorada en los bordes y bien cocida y el queso se derrita, de 10 a 12 minutos.\n4. Sirva con salsa marinara tibia para mojar.'),
(19, 7, 'French Apple Cake.jpg', 'French Apple Cake', '- 3 manzanas grandes para hornear (como Honeycrisp®), cortadas en cubitos (aproximadamente 4 tazas)\n- 2 cucharaditas de vinagre de manzana\n- 1 taza de harina para todo uso\n- 1 cucharadita de polvo para hornear\n- 1 cucharadita de sal kosher\n- 1 barra de mantequilla sin sal, a temperatura ambiente\n- 1/2 taza de azúcar blanca\n- 2 cucharadas de azúcar moreno claro\n- 2 huevos grandes', '1. Precalienta el horno a 350 grados F (175 grados C). Engrase un molde para pastel redondo de 9 pulgadas con mantequilla y cubra el fondo con papel pergamino.\n2. Pele, descorazone las manzanas y córtelas en cubos de entre 1/4 y 3/8 de pulgada de tamaño. Un poco más pequeños está bien, pero si los cubos son más grandes, no quedarán lo suficientemente tiernos cuando se horneen. Agréguelo a un tazón grande y mezcle con vinagre de sidra de manzana.\n3. Mezcle la harina, el polvo para hornear y la sal en un tazón pequeño.\n4. En otro tazón, bata la mantequilla, 1/2 taza de azúcar blanca y azúcar morena con una batidora eléctrica hasta que esté suave y esponjosa. Batir 1 huevo a velocidad alta hasta que esté completamente incorporado y la mezcla esté suave. Agrega el segundo huevo y repite. Incorpora el ron, el extracto de vainilla y la mitad de la mezcla de harina. Cuando la harina desaparezca añadir el resto e incorporar con una espátula.'),
(20, 8, 'mcdo banner.jpg', 'Patatas del McDonals', '- 8 patatas, peladas y cortadas en patatas fritas de 1/4 de pulgada de grosor\r\n- ¼ taza de azúcar blanca\r\n- 2 cucharadas de jarabe de maíz\r\n- 1 litro de aceite de canola, o según sea necesario\r\n- sal marina al gusto', '- 8 patatas, peladas y cortadas en patatas fritas de 1/4 de pulgada de grosor\r\n- ¼ taza de azúcar blanca\r\n- 2 cucharadas de jarabe de maíz\r\n- 1 litro de aceite de canola, o según sea necesario\r\n- sal marina al gusto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `email` varchar(60) COLLATE utf8mb3_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `reset_token` varchar(255) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `reset_token_expiry` datetime DEFAULT NULL,
  `reset_complete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `reset_token`, `reset_token_expiry`, `reset_complete`) VALUES
(4, 'prueba@gmx.com', '$2y$10$DZV3XK1pjPujQ2pctCO3vOvgwiEwBcC2OR2t7wMcI3DfhkXok2Ffi', NULL, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`tbl_category_id`);

--
-- Indices de la tabla `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  ADD PRIMARY KEY (`tbl_recipe_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `tbl_category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  MODIFY `tbl_recipe_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
