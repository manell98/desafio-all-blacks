-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Ago-2019 às 20:35
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdesafio_all_blacks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_09_160912_create_torcedores_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `torcedores`
--

CREATE TABLE `torcedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` enum('Sim','Não') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `torcedores`
--

INSERT INTO `torcedores` (`id`, `nome`, `documento`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `ativo`) VALUES
(1, 'Torcedor um', '054.558.569-85', '78.589-633', 'Rua das palmeiras', 'Bairro 56', 'Ceilândia', 'DF', '(61) 9 8569-4578', 'torcedor@gmail.com', 'Não'),
(3, 'Torcedor três', '87.333.538/5916-69', '92143-328', 'Avenida Solano, 42009. 769 Andar', 'Giovana do Norte', 'Matos', 'TO', '(27) 4055-3538', 'email@gmail.com', 'Não'),
(4, 'Sra. Elizabeth Flores Franco Filho', '873.335.385-91', '52927-611', 'Av. Quintana, 59571. Bloco C', 'Evandro do Sul', 'So Irene', 'PR', '(41) 3529-4394', 'dserna@terra.com.br', 'Sim'),
(5, 'Emlio Christian Valdez Filho', '657.830.332-43', '51102-511', 'Travessa Emanuel Soares, 885. Bloco C', 'So Emiliano do Leste', 'Noel do Norte', 'PB', '(27) 4055-3538', 'epaes@faro.net.br', 'Sim'),
(7, 'Mel Ndia Romero Jr.', '156.394.508-86', '57431-684', 'Largo Quintana, 222. Apto 74', 'Adriana do Sul', 'Adriana do Sul', 'BA', '(13) 3523-7580', 'laura18@solano.com', 'Sim'),
(8, 'Ornela Vieira Prado', '403.465.063-01', '43635-327', 'R. Jcomo, 73993. Bloco C', 'Giovana do Norte', 'Matos do Sul', 'AL', '(51) 92915-1816', 'ycordeiro@saraiva.net', 'Sim'),
(10, 'Emanuell Santos de Jesus', '000.000.000-00', '72280-366', 'Rua 6 Módulo 8', 'Condomínio Privê Lucena Roriz (Ceilândia)', 'Brasília', 'DF', '(61) 99162-4575', 'dfmanu06@gmail.com', 'Sim'),
(11, 'Privê Peças', '11.111.111/1111-86', '72280-366', 'Rua 6 Módulo 8', 'Condomínio Privê Lucena Roriz (Ceilândia)', 'Brasília', 'DF', '(61) 99162-4575', 'privepecas@gmail.com', 'Sim'),
(12, 'Tbata Gabriela Gil Jr.', '035.567.312-66', '69641-319', 'R. Faria, 1', 'So Daniela', 'So Tesslia d\'Oeste', 'TO', '(92) 4104-6689', 'scervantes@aragao.net.br', 'Sim'),
(13, 'Sra. Olvia Thalissa Jimenes Sobrinho', '214.210.634-09', '07446-493', 'Rua Srgio, 420', 'Porto Nicole', 'Santa Jorge', 'MT', '(82) 4943-0731', 'alan88@cervantes.com.br', 'Sim'),
(14, 'Valria Mascarenhas', '254.921.863-96', '16198-789', 'Av. Agustina, 52165. Apto 4', 'Joana do Norte', 'Estrada do Sul', 'SC', '(31) 99955-4796', 'gian46@gmail.com', 'Sim'),
(15, 'Optimus Tec', '99.999.999/9999-99', '72236-800', 'Setor Habitacional Sol Nascente', 'Ceilândia Sul (Ceilândia)', 'Brasília', 'DF', '(61) 4002-8922', 'suporteoptimustec@gmail.com', 'Sim'),
(16, 'Dr. Sara Barros Rocha', '745.968.989-01', '18624-817', 'Largo Salom, 94138. Bloco A', 'Carolina do Norte', 'Santa Eduardo do Sul', 'PA', '(89) 2925-6176', 'salazar.kevin@ig.com.br', 'Sim'),
(17, 'Noel Malena Reis Neto', '880.717.945-89', '54636-133', 'Av. Zaragoa, 07039. Bc. 0 Ap. 20', 'Porto Violeta', 'Porto Regina', 'MG', '(64) 97071-5957', 'lrios@yahoo.com', 'Sim'),
(18, 'Alex Silva', '056.987.458-75', '27280-000', 'Avenida Nova Brasília', 'Vila Brasília', 'Volta Redonda', 'RJ', '(61) 65161-6116', 'alex.silva@gmail.com', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$Um4mQ.KoonmKqQyye985veAxaznbSGh1Q9FjuQvd83TaVqhSJyHR2', 'Pvfbteje8CS2ICdT0FNg2bOMwbOju7ODk86qWkXyxE09ocNa3af9rB0oAYHl', '2019-08-09 19:50:02', '2019-08-09 19:50:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `torcedores`
--
ALTER TABLE `torcedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `torcedores_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `torcedores`
--
ALTER TABLE `torcedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
