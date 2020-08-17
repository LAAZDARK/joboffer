-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 10:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `texto` varchar(1000) NOT NULL DEFAULT 'CURRENT_TIMESTAMP()',
  `thumb` varchar(50) NOT NULL,
  `etiqueta` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`, `etiqueta`, `telefono`, `correo`) VALUES
(1, 'Ingeniero Industrial', 'ANEPSA es una empresa con mÃ¡s de 25 aÃ±os de experiencia, que ofrece servicios en una amplia gama de avalÃºos comerciales, seguros, financieros, inmobiliarios; asÃ­ como soluciones para controlar y a', '2019-11-27 01:49:17', 'GESTOR DE PROYECTOS\r\n\r\nDESCRIPCION GENERAL DEL PUESTO:\r\n\r\nEficientar y Realizar con base de los requerimientos de los diferentes proyectos y metas de la empresa.\r\n\r\nRESPONSABILIDADES:\r\n\r\nRevisiÃ³n Economica y Tenica de Proyectos\r\nAlto empuje en la obtenciÃ³n de objetivos.\r\nPlanear estratÃ©gicamente la entrega eficiente de los proyectos y avalÃºos.\r\nAplicar y emplear los conocimientos tÃ©cnicos, procesos econÃ³micos y sociales que afectan el valor del bien.\r\nTomar decisiones sustentadas\r\nServicio a Cliente\r\nPERFIL REQUERIDO PARA LA POSICIÃ“N:\r\n\r\nEducaciÃ³n\r\n\r\nIng. Industrial o afines\r\n\r\n1 aÃ±o deseable\r\n\r\nConocimiento / Habilidades Personales:\r\n\r\nWord, Excel, Power Point\r\nHabilidades Personales: Liderazgo, Toma de decisiones, innovador, trabajo por resultados, compromiso, cumplimiento, mejora continua, iniciativa, permeable a escuchar, servicio a cliente\r\nTipo de puesto: Tiempo completo\r\n\r\nSalario: $10,000.00 a $12,000.00 /mes\r\n\r\nEducaciÃ³n:\r\n\r\nLicenciatura trunca o en curso (Requisito ', '1.jpg', 'ingenieria proceso', '5547113677', 'recuross_h@empresa.com'),
(2, 'Ingeniero Ambiental / Biologo', 'DescripciÃ³n de la Empresa:  TRG MÃ‰XICO S. de R.L. de C.V. es una empresa con mas de 20 aÃ±os en el mercado ambiental en los Estados Unidos de AmÃ©rica, con oficinas estratÃ©gicamente localizadas par', '2019-11-27 01:50:13', 'DescripciÃ³n de la Empresa:\r\n\r\nTRG MÃ‰XICO S. de R.L. de C.V. es una empresa con mas de 20 aÃ±os en el mercado ambiental en los Estados Unidos de AmÃ©rica, con oficinas estratÃ©gicamente localizadas para cubrir el mercado norteamericano y mexicano. TRG MÃ‰XICO es socio fundador de la ASOCIACIÃ“N NACIONAL DE RESTAURADORES AMBIENTALES A.C. (ANARAC) y forma parte del selecto grupo de signatarios externos de muestreo de suelo (SEMâ€™s) debidamente certificados por la Entidad Mexicana de AcreditaciÃ³n (EMA).\r\n\r\nRequisitos Empleo:\r\n\r\nLegislaciÃ³n Ambiental.\r\nSeguimiento a trÃ¡mites con SEMARNAT, SEDEMA, SCT, STPS, CONAGUA, PROFEPA y ASEA.\r\nElaboraciÃ³n y presentaciÃ³n de cotizaciones.\r\nCoordinaciÃ³n de equipo de trabajo.\r\nSupervisiÃ³n de trabajos en Sitio.\r\nConocimiento en Fases I (Evaluaciones Ambientales de Sitio).\r\nFases II (Caracterizaciones de Sitio).\r\nRemediaciÃ³n de Sitios Contaminados.\r\nElaboraciÃ³n de MIAÂ´s.\r\nElaboraciÃ³n de ETJ.\r\nManejo de Residuos: SÃ³lidos Urbanos, Manejo Especi', 'images (1).jpg', 'ingenieria ambiental ingeniero', '5547113688', 'trg_rh@trg.com'),
(3, 'Ingeniero de producciÃ³n', 'Global Payroll Solutions es una empresa con mÃ¡s de 10 aÃ±os de experiencia en el mercado mexicano enfocada en proveer soluciones para la fuerza laboral de nuestros clientes. A travÃ©s de convenios co', '2019-11-27 01:50:44', 'Empresa LÃ­der en Impresiones OFFSET solicita INGENIERO DE PRODUCCIÃ“N - RECIÃ‰N EGRESADO, con las siguientes caracterÃ­sticas:\r\n\r\nREQUISITOS INDISPENSABLES:\r\n\r\nEscolaridad: Ingeniero Industrial o afÃ­n (reciÃ©n egresado).\r\n\r\nExperiencia: No necesaria.\r\n\r\nGusto por trabajo bajo presiÃ³n.\r\n\r\nResponsable.\r\n\r\nLiderazgo.\r\n\r\nFUNCIONES A REALIZAR:\r\n\r\nÂ° Seguimiento a los procesos del Ã¡rea de producciÃ³n.\r\n\r\nÂ° Captura y emisiÃ³n de reportes del Ã¡rea.\r\n\r\nÂ° Apoyo en la operaciÃ³n.\r\n\r\nHORARIO: Con disponibilidad de tiempo completo para rolar turnos (Matutino, Vespertino y Nocturno).\r\n\r\nOFERTA:\r\n\r\nSueldo: $8,000.00 mensuales brutos.\r\n\r\nPrestaciones de Ley.\r\n\r\nEn caso de estar interesado, favor de escribir al 5578704980 (WhatsApp) o postularse por este medio.\r\n\r\nTipo de puesto: Tiempo completo, Indefinido\r\n\r\nSalario: $8,000.00 a $8,001.00 /mes\r\n\r\nEducaciÃ³n:\r\n\r\nLicenciatura terminada (Requisito deseable)', 'images (2).jpg', 'ingenieria', '5511263388', 'correo_rh@gmail.com'),
(4, 'Articulo 4', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letr', '2019-11-27 01:51:16', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\', lo que hace que parezca un inglés legible. Muchos paquetes de edición de escritorio y editores de páginas web ahora usan Lorem Ipsum como su texto de modelo predeterminado, y una búsqueda de \'lorem ipsum\' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado con los años, a veces por accidente, a veces a propósito (humor inyectado y similares).Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\', lo que hace que parezca un inglés legible. Muchos paquetes de edición de escr', '4.png', '', NULL, NULL),
(5, 'UX Designer', 'Entropy  Somos un creciente equipo multidisciplinario trabajando en la evoluciÃ³n del ecosistema de marketing digital para e-commerce. Actualmente, desarrollamos tecnologÃ­as y herramientas que transf', '2019-11-27 04:39:33', 'Sobre el rol_\r\n\r\nEl diseÃ±ador de producto, a partir de un pensamiento estratÃ©gico, es el encargado de entender, interpretar, conceptualizar y mejorar constantemente nuestro producto. Proporciona soluciones inteligentes, creativas e innovadoras a las necesidades de nuestros usuarios. Cuenta con habilidades de diseÃ±o (diseÃ±o de interacciÃ³n, diseÃ±o de interfaz, diseÃ±o grÃ¡fico) y estÃ¡ familiarizado con mÃºltiples metodologÃ­as de investigaciÃ³n, ideaciÃ³n y conceptualizaciÃ³n de producto\r\n\r\nSkills\r\n\r\nMindset emprendedor, estratega, flexible y con excelentes habilidades de aprendizaje\r\nCurious, research-minded, data-informed, siempre sustentado por la data\r\nHabilidad para trabajar en equipo\r\nCapacidad para dar y recibir feedback\r\nSkills Adicionales:\r\n\r\nConocimientos previos / interÃ©s en marketing digital\r\nTu vida como Product Designer\r\n\r\nDefinir metodologÃ­as y ejecutar investigaciÃ³n con usuarios, de forma cuantitativa y cualitativa con nuestra base de clientes y operadores (entr', 'images.jpg', 'arquitecto', 'r_humanos@entropy.com', '5547118955');

-- --------------------------------------------------------

--
-- Table structure for table `candidatos`
--

CREATE TABLE `candidatos` (
  `id_candidato` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `celular` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `pass2` varchar(70) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `escuela` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `domicilioIns` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatos`
--

INSERT INTO `candidatos` (`id_candidato`, `nombre`, `apellidos`, `nacimiento`, `celular`, `correo`, `domicilio`, `pass`, `pass2`, `sexo`, `escuela`, `carrera`, `cedula`, `domicilioIns`) VALUES
(5, 'Luis', 'Alberto', '1996-05-11', '5547113677', 'laazfull@gmail.com', 'hank', '$2y$10$KmbmZSxImYDxFaRNtJO6p.VfIjFnvD1DMasHQjjXBPogQqhSEE.r.', '$2y$10$M5OcQT1eq4b/FidkUx2CFerAgrR2tKTP.xz.Kse/y3.xgwOhjjL6u', 'masculino', 'UNAM', 'InformÃ¡tica', '02157869', 'San Sebastian Xala #45'),
(6, 'Alberto', 'zamorano', '1996-05-11', '5547113677', 'alberto@gmail.com', 'hack', '$2y$10$kM5eDtYtaXZ4Pb7YpYdMz.5f0T6cerRm1sAQzqWodssSjb3YjDsii', '$2y$10$FH1nOHSZNToCxyzIVbTQheOhQIzKLkCwG5k191F4034aRohJt5LNy', 'masculino', 'UNAM', 'ingeniero', '12345678', 'puebla');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `texto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nombre`, `correo`, `texto`) VALUES
(1, 'luis', 'luisalberto.amadorz@gmail.com', 'dsfsdf'),
(2, 'luis', 'luisalberto.amadorz@gmail.com', 'dsfsdf'),
(3, 'Alberto', 'luisalberto.amadorz@gmail.com', 'ninguno'),
(4, 'carlos', 'carlos@gmail.com', 'ninguno'),
(5, 'jaquelinne', 'hjaquelinne@gmail.com', 'esta leve :v'),
(6, 'ruben', 'ruben@gmail.com', 'quisiera ser socio');

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `pass2` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL COMMENT 'numero de trabajadores',
  `rfcEmpresa` varchar(50) NOT NULL,
  `razonSocial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `contacto`, `apellidos`, `telefono`, `correo`, `pass`, `pass2`, `numero`, `rfcEmpresa`, `razonSocial`) VALUES
(1, 'luis', 'amador', '5547113677', 'unam@unam.mx', '123', '123', 15000, '123asd123r', 'unam s.a de c. v.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id_candidato`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
