-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2015 a las 01:34:46
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imprenta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asigna_permisos_perfiles`
--

CREATE TABLE IF NOT EXISTS `asigna_permisos_perfiles` (
  `ID` int(11) NOT NULL,
  `ID_PERFIL` int(11) NOT NULL,
  `ID_ICONO` int(11) NOT NULL,
  `ID_MENU` int(11) NOT NULL,
  `ESTATUS` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asigna_permisos_perfiles`
--

INSERT INTO `asigna_permisos_perfiles` (`ID`, `ID_PERFIL`, `ID_ICONO`, `ID_MENU`, `ESTATUS`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 3, 1, 0),
(3, 1, 2, 2, 1),
(4, 1, 2, 1, 1),
(5, 1, 1, 2, 1),
(6, 1, 1, 3, 1),
(7, 1, 2, 3, 1),
(8, 1, 1, 4, 1),
(9, 1, 2, 4, 1),
(10, 1, 1, 5, 1),
(11, 1, 2, 5, 0),
(12, 1, 3, 5, 1),
(13, 2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidades`
--

CREATE TABLE IF NOT EXISTS `calidades` (
  `CalidadId` int(8) NOT NULL,
  `Nombre` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `calidades`
--

INSERT INTO `calidades` (`CalidadId`, `Nombre`) VALUES
(1, 'Normal'),
(2, 'Quality'),
(3, 'Quality-Full'),
(4, 'Fotografica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `ClienteId` int(32) NOT NULL,
  `SucursalId` int(32) NOT NULL,
  `TipoClienteId` int(32) DEFAULT NULL,
  `FormaPagoId` int(32) DEFAULT NULL,
  `Nombres` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `ApellidoPaterno` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `ApellidoMaterno` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `Estado` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `Municipio` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `Colonia` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `numExt` int(8) NOT NULL,
  `numInt` int(8) DEFAULT NULL,
  `CP` int(8) NOT NULL,
  `Telefono` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Estatus` varchar(8) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ClienteId`, `SucursalId`, `TipoClienteId`, `FormaPagoId`, `Nombres`, `ApellidoPaterno`, `ApellidoMaterno`, `Estado`, `Municipio`, `Colonia`, `numExt`, `numInt`, `CP`, `Telefono`, `Email`, `Estatus`) VALUES
(1, 2, 1, 1, 'Eric', 'Nieto', 'Alcocer', '27', 'Cardenas', 'Centro', 203, NULL, 86550, '(937) 128-31-36', 'landyggonzalez@gmail.com', '1'),
(3, 2, 2, 1, 'Isabella', 'Nieto', 'Gonzalez', '27', 'Cardenas', 'Centro', 203, 0, 86550, '(937) 128-3136', 'landyggonzalez@gmail.com', '1'),
(4, 2, 1, 1, 'Landy Guadalupe', 'Gonzalez', 'Morales', '27', 'Cardenas', 'Centro', 203, 0, 86550, '', 'landyggonzalez@gmail.com', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenador`
--

CREATE TABLE IF NOT EXISTS `disenador` (
  `disenadorId` int(16) NOT NULL,
  `nombreDisenador` varchar(32) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenio`
--

CREATE TABLE IF NOT EXISTS `disenio` (
  `IdDisenio` int(32) NOT NULL,
  `DisenioNombre` varchar(64) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `EstadoId` int(8) NOT NULL,
  `Estado` varchar(32) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`EstadoId`, `Estado`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Coahuila'),
(6, 'Colima'),
(7, 'Chiapas'),
(8, 'Chihuahua'),
(9, 'Distrito Federal'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'México'),
(16, 'Michoacán'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaspagos`
--

CREATE TABLE IF NOT EXISTS `formaspagos` (
  `FormaPagoId` int(8) NOT NULL,
  `FormaPago` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `formaspagos`
--

INSERT INTO `formaspagos` (`FormaPagoId`, `FormaPago`) VALUES
(1, 'Contado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iconos`
--

CREATE TABLE IF NOT EXISTS `iconos` (
  `ID` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `IMAGEN` varchar(100) NOT NULL DEFAULT 'assets/img/usuarios.png',
  `ESTATUS` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iconos`
--

INSERT INTO `iconos` (`ID`, `DESCRIPCION`, `IMAGEN`, `ESTATUS`) VALUES
(1, 'Editar', 'assets/img/editar.png', 1),
(2, 'Eliminar', 'assets/img/eliminar.png', 1),
(3, 'Asignar Permisos a Perfiles', 'assets/img/icon_permisos.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE IF NOT EXISTS `materiales` (
  `materialId` int(8) NOT NULL,
  `sucursalId` int(32) NOT NULL,
  `calidadId` int(16) DEFAULT NULL,
  `tipoMaterialId` int(16) DEFAULT NULL,
  `stock` int(16) NOT NULL,
  `precio` decimal(19,2) NOT NULL,
  `fechaIngreso` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `materialNombre` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `unidadDeMedida` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`materialId`, `sucursalId`, `calidadId`, `tipoMaterialId`, `stock`, `precio`, `fechaIngreso`, `materialNombre`, `unidadDeMedida`) VALUES
(1, 4, 1, 3, 1000, '3000.00', '06/11/2015', 'Lona Front Calidad Fotografica', 'Metros'),
(2, 2, 1, 3, 1000, '8.00', '06/11/2015', 'Opalina', 'Piezas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `IMAGEN` varchar(50) NOT NULL DEFAULT 'assets/img/not_found.png',
  `URL` varchar(50) DEFAULT NULL,
  `ORDENAMIENTO` int(11) NOT NULL DEFAULT '0',
  `ESTATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`ID`, `DESCRIPCION`, `IMAGEN`, `URL`, `ORDENAMIENTO`, `ESTATUS`) VALUES
(0, 'Nodo Raiz', 'assets/img/not_found.png', '#', 0, 1),
(1, 'Usuarios', 'assets/img/Usuarios.png', 'usuarios.php', 1, 1),
(2, 'Menu del Sistema', 'assets/img/menu.png', 'menu.php', 2, 1),
(3, 'Mis Datos', 'assets/img/configuracion.png', 'MisDatos.php', 3, 3),
(4, 'Iconos', 'assets/img/iconos.png', 'iconos.php', 4, 1),
(5, 'Perfiles', 'assets/img/Perfiles.png', 'perfiles.php', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_01_15_105324_create_roles_table', 2),
('2015_01_15_114412_create_role_user_table', 2),
('2015_01_26_115212_create_permissions_table', 2),
('2015_01_26_115523_create_permission_role_table', 2),
('2015_02_09_132439_create_permission_user_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `Idpedido` int(64) NOT NULL,
  `sucursalId` int(8) NOT NULL,
  `Idcliente` int(64) NOT NULL,
  `statusId` int(32) NOT NULL,
  `folioPedido` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `fechaRecepcion` int(11) NOT NULL,
  `fechaEntrega` int(11) NOT NULL,
  `materialCantidad` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `materialNombre` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `base` float NOT NULL,
  `altura` float NOT NULL,
  `metros` float NOT NULL,
  `acabados` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `tiposervicio` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `archivos` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `disenio` tinyint(1) NOT NULL,
  `costoDisenio` float NOT NULL,
  `disenadorId` int(16) NOT NULL,
  `formaPago` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `costo` float NOT NULL,
  `importeTotal` float NOT NULL,
  `anticipo` float NOT NULL,
  `resta` float NOT NULL,
  `costosiniva` float NOT NULL,
  `descuento` float NOT NULL,
  `usuarioAlta` varchar(32) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `perfilId` int(11) NOT NULL,
  `descripcion` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`perfilId`, `descripcion`, `estatus`) VALUES
(1, 'Administrador', 1),
(2, 'Invitado', 0),
(3, 'Impresor', 1),
(4, 'Master', 1),
(5, 'Ventas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `permisoId` int(11) NOT NULL,
  `usuarioId` int(11) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`permisoId`, `usuarioId`, `estatus`) VALUES
(1, 1, 1),
(5, 1, 1),
(7, 2, 1),
(9, 1, 1),
(13, 1, 1),
(15, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_iconos`
--

CREATE TABLE IF NOT EXISTS `permisos_iconos` (
  `ID` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ICONO` int(11) NOT NULL,
  `ID_MENU` int(11) NOT NULL,
  `ESTATUS` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos_iconos`
--

INSERT INTO `permisos_iconos` (`ID`, `ID_USUARIO`, `ID_ICONO`, `ID_MENU`, `ESTATUS`) VALUES
(41, 1, 1, 0, 1),
(42, 1, 2, 0, 1),
(87, 2, 1, 3, 1),
(207, 1, 1, 1, 1),
(208, 1, 2, 2, 1),
(209, 1, 2, 1, 1),
(210, 1, 1, 2, 1),
(211, 1, 1, 3, 1),
(212, 1, 2, 3, 1),
(213, 1, 1, 4, 1),
(214, 1, 2, 4, 1),
(215, 1, 1, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `status`, `model`, `created_at`, `updated_at`) VALUES
(1, 'Crear Usuarios', 'crear.usuarios', 'Crear usuarios  en el sistema', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'Admin del sistema', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Ventas', 'ventas', 'Puntos de ventas', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Diseño', 'dise-o', 'Diseñador', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Impresor', 'impresor', 'impresor de lonas', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 2, '2015-11-12 03:09:07', '2015-11-12 03:09:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `statusId` int(8) NOT NULL,
  `stutus` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statusseguimiento`
--

CREATE TABLE IF NOT EXISTS `statusseguimiento` (
  `statusSeguimientoId` int(8) NOT NULL,
  `statusId` int(8) NOT NULL,
  `noPedido` int(32) NOT NULL,
  `fechaInicio` int(16) NOT NULL,
  `fechatermino` int(16) NOT NULL,
  `responsable` varchar(32) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockshistorial`
--

CREATE TABLE IF NOT EXISTS `stockshistorial` (
  `materialId` int(8) NOT NULL,
  `sucursalId` int(32) NOT NULL,
  `calidadId` int(16) DEFAULT NULL,
  `tipoMaterialId` int(16) DEFAULT NULL,
  `stock` int(16) NOT NULL,
  `precio` double NOT NULL,
  `fechaIngreso` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `materialNombre` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `unidaddeMedida` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `stockshistorial`
--

INSERT INTO `stockshistorial` (`materialId`, `sucursalId`, `calidadId`, `tipoMaterialId`, `stock`, `precio`, `fechaIngreso`, `materialNombre`, `unidaddeMedida`) VALUES
(1, 4, 1, 3, 1000, 8.2, '06/11/2015', 'Opalina', 'Piezas'),
(2, 4, 1, 3, 1000, 8.2, '06/11/2015', 'Opalina', 'Piezas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `sucursalId` int(8) NOT NULL,
  `sucursalEstadoId` int(64) NOT NULL,
  `sucursal` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`sucursalId`, `sucursalEstadoId`, `sucursal`) VALUES
(2, 31, 'Merida'),
(3, 7, 'Mison Ha'),
(4, 27, 'Cardenas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposclientes`
--

CREATE TABLE IF NOT EXISTS `tiposclientes` (
  `tipoClienteId` int(8) NOT NULL,
  `tipoCliente` varchar(16) COLLATE latin1_general_ci NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `tiposclientes`
--

INSERT INTO `tiposclientes` (`tipoClienteId`, `tipoCliente`, `estatus`) VALUES
(1, 'Normal', 1),
(2, 'Comercio', 1),
(3, 'Iglesia', 1),
(6, 'Iglesia', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposmateriales`
--

CREATE TABLE IF NOT EXISTS `tiposmateriales` (
  `tipoMaterialId` int(8) NOT NULL,
  `material` varchar(16) COLLATE latin1_general_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `tiposmateriales`
--

INSERT INTO `tiposmateriales` (`tipoMaterialId`, `material`, `activo`) VALUES
(1, 'Lona', 0),
(2, 'Lona', 1),
(3, 'Tabloide', 1),
(4, 'Acrilico', 1),
(6, 'Prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roman', 'roman@hotmail.com', '$2y$10$xYDiaKrOHLgpBNpaXXtgMOqExwYd0WNUBQf29llpWDuWyPBJ5p1Ce', 'cwdD4WsJDMYuovXN3XzwM9IOGwG40bPeRpTXr92kscfswa1KkOAMzwDZViig', '0000-00-00 00:00:00', '2015-11-07 04:33:19'),
(2, 'Landy', 'landyggonzalez@gmail.com', '$2y$10$M77oj.KiRrP.q5578zzw9OiuBsgDtq6Y6VaSUPtWZGVFW1juSFWgC', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Eric', 'eric@hotmail.com', '$2y$10$UQR6NgV/06xBq1Mie5loHufJET4k38OYTzNaBO57qMOkmDxN0cuwO', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuarioId` int(11) NOT NULL,
  `sucursalId` int(32) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `apellidos` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `usuario` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `fecha_registro` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `fecha_activacion` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `fecha_actualizacion` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `verificado` int(11) NOT NULL DEFAULT '0',
  `estatus` int(11) NOT NULL DEFAULT '0',
  `acceso` int(11) NOT NULL DEFAULT '0',
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioId`, `sucursalId`, `nombre`, `apellidos`, `email`, `usuario`, `password`, `fecha_registro`, `fecha_activacion`, `fecha_actualizacion`, `verificado`, `estatus`, `acceso`, `tipo_usuario`) VALUES
(5, 0, 'Landy ', 'Gonzalez', 'landyggonzalez@gmail.com', 'Landy ', '', '2015-11-04', '2015-11-04', '', 0, 1, 1, 1),
(6, 0, 'Isabella', 'Nieto Gonzalez', 'isa@hotmail.com', 'Isabella', '', '2015-11-05', '2015-11-05', '', 0, 1, 1, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asigna_permisos_perfiles`
--
ALTER TABLE `asigna_permisos_perfiles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `calidades`
--
ALTER TABLE `calidades`
  ADD PRIMARY KEY (`CalidadId`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteId`),
  ADD KEY `SucursalId_2` (`SucursalId`),
  ADD KEY `TipoClienteId` (`TipoClienteId`),
  ADD KEY `FormaPagoId` (`FormaPagoId`);

--
-- Indices de la tabla `disenador`
--
ALTER TABLE `disenador`
  ADD PRIMARY KEY (`disenadorId`);

--
-- Indices de la tabla `disenio`
--
ALTER TABLE `disenio`
  ADD PRIMARY KEY (`IdDisenio`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`EstadoId`);

--
-- Indices de la tabla `formaspagos`
--
ALTER TABLE `formaspagos`
  ADD PRIMARY KEY (`FormaPagoId`);

--
-- Indices de la tabla `iconos`
--
ALTER TABLE `iconos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`materialId`),
  ADD KEY `CalidadId_2` (`calidadId`),
  ADD KEY `TipoMaterialId` (`tipoMaterialId`),
  ADD KEY `sucursalId` (`sucursalId`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Idpedido`),
  ADD KEY `Idcliente` (`Idcliente`),
  ADD KEY `statusId` (`statusId`),
  ADD KEY `formaPago` (`formaPago`),
  ADD KEY `sucursalId` (`sucursalId`),
  ADD KEY `disenadorId` (`disenadorId`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`perfilId`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`permisoId`);

--
-- Indices de la tabla `permisos_iconos`
--
ALTER TABLE `permisos_iconos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- Indices de la tabla `statusseguimiento`
--
ALTER TABLE `statusseguimiento`
  ADD PRIMARY KEY (`statusSeguimientoId`),
  ADD KEY `statusId` (`statusId`);

--
-- Indices de la tabla `stockshistorial`
--
ALTER TABLE `stockshistorial`
  ADD PRIMARY KEY (`materialId`),
  ADD KEY `sucursalId` (`sucursalId`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`sucursalId`),
  ADD KEY `SucursalEstadoId` (`sucursalEstadoId`);

--
-- Indices de la tabla `tiposclientes`
--
ALTER TABLE `tiposclientes`
  ADD PRIMARY KEY (`tipoClienteId`);

--
-- Indices de la tabla `tiposmateriales`
--
ALTER TABLE `tiposmateriales`
  ADD PRIMARY KEY (`tipoMaterialId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioId`),
  ADD KEY `sucursalId` (`sucursalId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asigna_permisos_perfiles`
--
ALTER TABLE `asigna_permisos_perfiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `calidades`
--
ALTER TABLE `calidades`
  MODIFY `CalidadId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ClienteId` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `disenador`
--
ALTER TABLE `disenador`
  MODIFY `disenadorId` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `disenio`
--
ALTER TABLE `disenio`
  MODIFY `IdDisenio` int(32) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `EstadoId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `formaspagos`
--
ALTER TABLE `formaspagos`
  MODIFY `FormaPagoId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `iconos`
--
ALTER TABLE `iconos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `materialId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Idpedido` int(64) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `perfilId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `permisoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `permisos_iconos`
--
ALTER TABLE `permisos_iconos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `statusseguimiento`
--
ALTER TABLE `statusseguimiento`
  MODIFY `statusSeguimientoId` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `stockshistorial`
--
ALTER TABLE `stockshistorial`
  MODIFY `materialId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `sucursalId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tiposclientes`
--
ALTER TABLE `tiposclientes`
  MODIFY `tipoClienteId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tiposmateriales`
--
ALTER TABLE `tiposmateriales`
  MODIFY `tipoMaterialId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`FormaPagoId`) REFERENCES `formaspagos` (`FormaPagoId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`SucursalId`) REFERENCES `sucursales` (`sucursalId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`TipoClienteId`) REFERENCES `tiposclientes` (`tipoClienteId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`tipoMaterialId`) REFERENCES `tiposmateriales` (`tipoMaterialId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materiales_ibfk_2` FOREIGN KEY (`calidadId`) REFERENCES `calidades` (`CalidadId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materiales_ibfk_3` FOREIGN KEY (`sucursalId`) REFERENCES `sucursales` (`sucursalId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Idcliente`) REFERENCES `clientes` (`ClienteId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`sucursalId`) REFERENCES `sucursales` (`sucursalId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`disenadorId`) REFERENCES `disenador` (`disenadorId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`statusId`) REFERENCES `pedidos` (`statusId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `statusseguimiento`
--
ALTER TABLE `statusseguimiento`
  ADD CONSTRAINT `statusseguimiento_ibfk_1` FOREIGN KEY (`statusId`) REFERENCES `status` (`statusId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `sucursales_ibfk_1` FOREIGN KEY (`sucursalEstadoId`) REFERENCES `estados` (`EstadoId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
