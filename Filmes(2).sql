-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21-Jul-2022 às 18:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `actores`
--

CREATE TABLE `actores` (
  `nome` varchar(50) NOT NULL,
  `morada` varchar(70) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `nacionalidade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `actores`
--

INSERT INTO `actores` (`nome`, `morada`, `sexo`, `dataNascimento`, `nacionalidade`) VALUES
('Al Pacino', '850 3rd Avenue, New York', 'M', '1940-05-25', 'USA'),
('Alec Baldwin', '101 Sprinfield, Santa Monica', 'M', '1964-01-26', 'USA'),
('Arnold Schwarzenegger', '83 Lincoln Av., Las Vegas', 'M', '1967-08-19', 'AUS/USA'),
('Ben Kingsley', '92052 Wilshire Blvd, Beverly Hills, California', 'M', '1943-12-31', 'UK'),
('Carrie Fisher', '123 Maple St., Hollywood', 'F', '1955-11-07', 'USA'),
('Christina Ricci', '7340 Santa Monica, California', 'F', '1980-02-12', 'USA'),
('Clark Gable', 'Olympic Blvd, Los Angeles', 'M', '1901-02-01', 'USA'),
('Clint Eastwood', '12 Presley Dr., Beverly Hills', 'M', '1946-01-25', 'USA'),
('Dana Carvey', '700 El Camino, Beverly Hills', 'M', '1955-06-02', 'USA'),
('Danny DeVito', '18 Rodeo Dr., Beverly Hills', 'M', '1944-11-17', 'USA'),
('Ellen Burstyn', 'P.O. Box 20906, New York', 'F', '1932-12-07', 'USA'),
('Emilio Estevez', '201 California St., Mountain View', 'F', '1960-03-22', 'USA'),
('Fay Wray', '3rd Avenue, New York', 'F', '1907-09-01', 'USA'),
('Frances McDormand', '8931 Ellis Avenue, Los Angeles', 'F', '1957-06-23', 'USA'),
('Harrison Ford', '789 Palm Dr., Beverly Hills', 'M', '1942-07-13', 'USA'),
('Irene Bedard', 'Olympic Blvd, Los Angeles', 'F', '1967-07-22', 'USA'),
('Jamie Foxx', '1423 Town St, North Carolina', 'M', '1967-12-13', 'USA'),
('Jessica Lange', '7340 Santa Monica, California', 'F', '1949-04-20', 'USA'),
('Joaquin Phoenix', '9601 Wilshire Blvd, California', 'M', '1974-10-28', 'USA/PRI'),
('Joe Pesci', 'Elm St., Santa Barbara', 'M', '1943-02-09', 'USA'),
('John Travolta', 'NE 16th Terrace, Florida', 'M', '1954-02-18', 'USA'),
('Kate Winslet', 'Peter Fraser and Dunlop, Drury House, 34-43 Russell Street London', 'F', '1975-10-05', 'UK'),
('Kevin Costner', '88 Palm Dr., Hollywood', 'M', '1965-01-30', 'USA'),
('Kim Basinger', '101 Sprinfield, Santa Monica', 'F', '1967-08-12', 'USA'),
('Laura Derm', '350 South Beverly Drive, California', 'F', '1967-02-10', 'USA'),
('Leonardo DiCaprio', '9255 Sunset Blvd., Suite 615, California', 'M', '1974-11-11', 'USA'),
('Liam Neeson', '3rd Avenue, New York', 'M', '1952-06-07', 'UK'),
('Mark Hamill', '456 Oak Rd., Brentwood', 'M', '1950-02-23', 'USA'),
('Marlon Brando', 'Blvd Sherman Oaks, California', 'M', '1924-04-03', 'USA'),
('Matt Damon', '9601 Wilshire Blvd, Beverly Hills, California', 'M', '1970-10-08', 'USA'),
('Matthew Broderick', 'Olympic Blvd, Los Angeles', 'M', '1962-03-21', 'USA'),
('Max Von Sydow', '7340 Santa Monica, California', 'M', '1929-04-10', 'SWE'),
('Mel Gibson', '5rd Avenue, New York', 'M', '1956-01-03', 'USA'),
('Meryl Streep', 'Meryl House, Beverly Hills', 'M', '1961-06-21', 'USA'),
('Michael Keaton', '32 Palm Beach, Santa Monica', 'M', '1958-03-02', 'USA'),
('Michelle Pfeiffer', 'Via Venetto 4, Hollywood', 'M', '1969-11-14', 'USA'),
('Mike Myers', '880 Elm St., Santa Barbara', 'M', '1963-05-25', 'CAN/USA'),
('Morgan Freeman', '2029 Century Park E. Suite 1190, Los Angeles', 'M', '1937-06-01', 'USA'),
('Natalie Mendoza', 'Blvd Sherman Oaks, California', 'M', '1952-04-21', 'USA'),
('Nicole Kidman', '26 Palm Dr., Hollywood', 'M', '1969-11-14', 'USA'),
('Richard Crenna', 'Olympic Blvd, Los Angeles', 'M', '1926-11-30', 'USA'),
('Robert De Niro', '375 Greenwich Street, New York', 'M', '1943-08-17', 'USA/ITA'),
('Robert Shaw', '7340 Santa Monica, California', 'M', '1927-08-09', 'UK'),
('Roy Scheider', 'Elm St., Santa Barbara', 'M', '1932-11-10', 'USA'),
('Russell Crowe', '800 Ne Roberts Ave Apt 118, Gresham', 'M', '1964-04-07', 'NZL'),
('Sam Neill', 'PO Box 506 Alexandra 9340, New Zealand', 'M', '1947-09-14', 'UK'),
('Samuel L. Jackson', 'Van Nuys Blvd Sherman Oaks, California', 'M', '1948-12-21', 'USA'),
('Sharon Stone', '550 Elm St., Santa Barbara', 'M', '1970-05-14', 'USA'),
('Sylvester Stallone', '1840 Century Park East, Los Angeles', 'M', '1946-07-06', 'USA'),
('Talia Shire', '45rd Avenue, New York', 'M', '1946-04-25', 'USA'),
('Tim Robbins', '11400 W. Olympic Blvd, Los Angeles', 'm', '1958-10-16', 'USA'),
('Tom Cruise', '26 Palm Dr., Hollywood', 'm', '1967-08-20', 'USA'),
('Tom Hanks', 'P.O. Box 7340 Santa Monica, California', 'm', '1956-07-09', 'USA/GRC'),
('Vivien Leigh', 'Olympic Blvd, Los Angeles', 'f', '1913-11-05', 'UK'),
('William H. Macy', 'St New York, New York', 'm', '1950-03-13', 'USA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudios`
--

CREATE TABLE `estudios` (
  `nome` varchar(30) NOT NULL,
  `morada` varchar(70) DEFAULT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estudios`
--

INSERT INTO `estudios` (`nome`, `morada`, `pais`) VALUES
('Anexo 82', 'Lisboa', 'Portugal'),
('Arco Films', 'Guimarães', 'Portugal'),
('Baraka Films', 'Réalisateur, monteur, cadreur', 'França'),
('Castle Rock', '335 N Maple Dr, California', 'USA'),
('Columbia', '10202 Washington Boulevard, California', 'USA'),
('Conspiração Filmes', 'Belo Horizonte', 'Brasil'),
('Costa do Castelo Filmes', 'Rua José Carlos Ary dos Santos, 2664-505 Santo Antão do Tojal', 'Portugal'),
('Disney', '56 Yankee Boulevard, Los Angeles', 'USA'),
('Fox', '101 Embarcadero, Los Angeles', 'USA'),
('Haka Honu', 'Chile', 'Chile'),
('LC Barreto Filmes', 'Rio de Janeiro', 'Brasil'),
('Miramax', '1901 Avenue Of The Stars Ste 2000, California', 'USA'),
('Namuss', 'Madrid', 'Espanha'),
('Novelo Filmes', 'Florianopolis', 'Brasil'),
('O2 Filmes', 'São Paulo', 'Brasil'),
('Orion Pictures', '245 N Beverly Dr, California', 'USA'),
('Paramount', '44 Pine St., Los Angeles', 'USA'),
('Polygram', '30600 Telegraph Road Bingham Farms, Michigan', 'USA'),
('Red Reel / Alexandria Bombach', 'Alexandria', 'Alexandria'),
('SEAGMEDIA', 'Av. 5 de Outubro', 'Portugal'),
('United Artists', '750 N. San Vicente Boulevard, California', 'USA'),
('Universal', '23 Universal Studies Dr., Los Angeles', 'USA'),
('Warner Brothers', '71 Parkway Dr., San Diego', 'USA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `Id` int(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `duracao` int(11) DEFAULT NULL,
  `nomeActor` varchar(50) NOT NULL,
  `nomeEstudio` varchar(30) DEFAULT NULL,
  `nomeRealizador` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`Id`, `nome`, `ano`, `duracao`, `nomeActor`, `nomeEstudio`, `nomeRealizador`) VALUES
(1, 'Addams Family', 1991, 102, 'Christina Ricci', 'Paramount', 'Barry Sonnenfeld'),
(2, 'Basic Instinct', 1986, 100, 'Sharon Stone', 'Paramount', 'Paul Verhoeven'),
(3, 'Batman Returns', 1992, 122, 'Michael Keaton, Danny DeVito, Michelle Pfeiffer', 'Warner Brothers', 'Tim Burton'),
(4, 'Bridges of Madison County', 1995, 147, 'Clint Eastwood, Meryl Streep', 'Universal', 'Clint Eastwood'),
(5, 'Dances with Wolves', 1990, 132, 'Kevin Costner', 'Fox', 'Kevin Costner'),
(6, 'Empire Strikes Back', 1980, 143, 'Carrie Fisher', 'Fox', 'Irvin Kershner'),
(7, 'Eyes Wide Shut', 1999, 148, 'Nicole Kidman, Tom Cruise', 'Paramount', 'Stanley Kubrik'),
(8, 'Gone With the Wind', 1939, 181, 'Clark Gable, Vivien Leigh', 'Paramount', 'Victor Fleming'),
(9, 'Indiana Jones', 1981, 130, 'Harrison Ford', 'Universal', 'Steven Spielberg'),
(10, 'JFK', 1996, 130, 'Kevin Costner', 'Fox', 'Oliver Stone'),
(11, 'King Kong', 1933, 125, 'Fay Wray', 'Universal', 'Merian Cooper'),
(12, 'King Kong', 1976, 130, 'Jessica Lange', 'Universal', 'John Guillermin'),
(13, 'Lion King', 1994, 122, 'Matthew Broderick', 'Disney', 'Roger Allers'),
(14, 'Mighty Ducks', 1991, 104, 'Emilio Estevez', 'Disney', 'Stephen Herek'),
(15, 'Moulin Rouge', 2001, 124, 'Natalie Mendoza', 'Fox', 'Baz Luhrmann'),
(16, 'Pocahontas', 1995, 115, 'Mel Gibson, Irene Bedard', 'Disney', 'Mike Gabriel'),
(17, 'Return of the Jedi', 1983, 165, 'Carrie Fisher', 'Fox', 'Richard Marquand'),
(18, 'Star Wars', 1977, 124, 'Carrie Fisher, Mark Hamill, Harrison Ford', 'Fox', 'George Lucas'),
(19, 'The Fugitive', 1993, 120, 'Harrison Ford', 'Universal', 'Andrew Davies'),
(20, 'Top Gun', 1986, 145, 'Tom Cruise', 'Fox', 'Tony Scott'),
(21, 'Total Recall', 1990, 110, 'Arnold Schwarzenegger, Sharon Stone', 'Fox', 'Paul Verhoeven'),
(22, 'Wayne\'s World', 1992, 95, 'Dana Carvey, Mike Meyers', 'Paramount', 'Penelope Spheeris'),
(23, 'The Godfather', 1972, 175, 'Al Pacino, Marlon Brando', 'Paramount', 'Francis Ford Coppola'),
(24, 'The Shawshank Redemption', 1994, 142, 'Tim Robbins, Morgan Freeman', 'Castle Rock', 'Frank Darabont'),
(25, 'Schindler\'s List', 1993, 195, 'Liam Neeson, Ben Kingsley', 'Universal', 'Steven Spielberg'),
(26, 'Raging Bull', 1980, 129, 'Robert De Niro, Joe Pesci', 'United Artists', 'Martin Scorsese'),
(27, 'Gladiator', 2000, 155, 'Russell Crowe, Joaquin Phoenix', 'Universal', 'Ridley Scott'),
(28, 'Titanic', 1997, 194, 'Leonardo DiCaprio, Kate Winslet', 'Paramount', 'James Cameron'),
(29, 'Saving Private Ryan', 1998, 169, 'Tom Hanks, Matt Damon', 'Paramount', 'Steven Spielberg'),
(30, 'Rocky', 1976, 120, 'Sylvester Stallone,Talia Shire', 'United Artists', 'John G. Avildsen'),
(31, 'Jaws', 1975, 124, 'Roy Scheider, Robert Shaw', 'Universal', 'Steven Spielberg'),
(32, 'Jurassic Park', 1993, 127, 'Sam Neill, Laura Derm', 'Universal', 'Steven Spielberg'),
(33, 'The Exorcist', 1973, 122, 'Ellen Burstyn, Max von Sydow', 'Warner Brothers', 'William Friedkin'),
(34, 'Pulp Fiction', 1994, 154, 'John Travolta, Samuel L. Jackson', 'Miramax', 'Quentin Tarantino'),
(35, 'Joker', 2019, 122, 'Joaquin Phoenix, Robert De Niro', 'Warner Brothers', 'Todd Phillips'),
(36, 'Django Unchained', 2012, 165, 'Jamie Foxx, Leonardo DiCaprio', 'Columbia', 'Quentin Tarantino'),
(37, 'Rambo First Blood', 1982, 97, 'Sylvester Stallone, Richard Crenna', 'Orion Pictures', 'Ted Kotcheff'),
(38, 'Fargo', 1996, 98, 'Frances McDormand, William H. Macy', 'Polygram', 'Joel Coen'),
(47, 'Carlos', 1962, 120, 'belga', 'belga', 'belga');

-- --------------------------------------------------------

--
-- Estrutura da tabela `realizadores`
--

CREATE TABLE `realizadores` (
  `nome` varchar(50) NOT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `dataNascimento` date NOT NULL,
  `nacionalidade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `realizadores`
--

INSERT INTO `realizadores` (`nome`, `morada`, `sexo`, `dataNascimento`, `nacionalidade`) VALUES
('Andrew Davies', '850 3rd Avenue, New York', 'm', '1946-11-21', 'USA'),
('Barry Sonnenfeld', '101 Sprinfield, Santa Monica', 'm', '1953-04-01', 'USA'),
('Baz Luhrmann', '83 Lincoln Av., Las Vegas', 'm', '1962-09-17', 'AUS'),
('Clint Eastwood', '12 Presley Dr., Beverly Hills', 'm', '1930-05-31', 'USA'),
('Francis Ford Coppola', '92052 Wilshire Blvd, Beverly Hills, California', 'm', '1939-04-07', 'USA'),
('Frank Darabont', '123 Maple St., Hollywood', 'm', '1959-01-28', 'FR'),
('George Lucas', '7340 Santa Monica, California', 'm', '1944-05-14', 'USA'),
('Irvin Kershner', 'Olympic Blvd, Los Angeles', 'm', '1923-04-29', 'USA'),
('James Cameron', '12 Presley Dr., Beverly Hills', 'm', '1954-08-16', 'CAN'),
('Joel Coen', '700 El Camino, Beverly Hills', 'm', '1954-11-29', 'USA'),
('John G. Avildsen', '18 Rodeo Dr., Beverly Hills', 'm', '1935-12-21', 'USA'),
('John Guillermin', 'St New York, New York', 'm', '1925-11-11', 'USA'),
('jose', 'ececewc', 'M', '1658-05-14', 'usa'),
('Kevin Costner', '88 Palm Dr., Hollywood', 'm', '1955-01-18', 'USA'),
('Martin Scorsese', 'Olympic Blvd, Los Angeles', 'm', '1942-11-17', 'USA/ITA'),
('Merian Cooper', 'P.O. Box 7340 Santa Monica, California', 'm', '1893-04-21', 'USA'),
('Mike Gabriel', '26 Palm Dr., Hollywood', 'm', '1954-11-05', 'USA'),
('Oliver Stone', '11400 W. Olympic Blvd, Los Angeles', 'm', '1946-09-15', 'USA'),
('Paul Verhoeven', '45rd Avenue, New York', 'm', '1938-07-18', 'NL'),
('Penelope Spheeris', '1840 Century Park East, Los Angeles', 'f', '1946-12-02', 'USA'),
('Quentin Tarantino', 'Woodrow Wilson Dr, Los Angeles', 'm', '1963-03-27', 'USA'),
('Richard Marquand', '550 Elm St., Santa Barbara', 'm', '1937-09-22', 'UK'),
('Ridley Scott', 'Van Nuys Blvd Sherman Oaks, California', 'm', '1937-11-30', 'UK'),
('Roger Allers', 'PO Box 506 Alexandra 9340, New Zealand', 'm', '1949-06-29', 'USA'),
('Stanley Kubrik', '800 Ne Roberts Ave Apt 118, Gresham', 'm', '1928-07-26', 'USA'),
('Stephen Herek', '7340 Santa Monica, California', 'm', '1958-11-10', 'USA'),
('Steven Spielberg', 'Amblin Partners, 100 Universal City Plaza, Los Angeles', 'm', '1946-12-18', 'USA'),
('Ted Kotcheff', '375 Greenwich Street, New York', 'm', '1931-04-07', 'CAN'),
('Tim Burton', 'Olympic Blvd, Los Angeles', 'm', '1958-08-25', 'USA'),
('Todd Phillips', '2029 Century Park E. Suite 1190, Los Angeles', 'm', '1970-12-20', 'USA'),
('Tony Scott', 'Via Venetto 4, Hollywood', 'm', '1944-06-21', 'UK'),
('Victor Fleming', '32 Palm Beach, Santa Monica', 'm', '1889-02-23', 'USA'),
('William Friedkin', '456 Oak Rd., Brentwood', 'm', '1935-08-29', 'USA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Registros_usuarios`
--

CREATE TABLE `Registros_usuarios` (
  `Id` int(255) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Registros_usuarios`
--

INSERT INTO `Registros_usuarios` (`Id`, `nome`, `email`, `pass`) VALUES
(1, 'jose', 'jose_freitas_2@hotmail.com', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`Id`,`nome`);

--
-- Índices para tabela `realizadores`
--
ALTER TABLE `realizadores`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `Registros_usuarios`
--
ALTER TABLE `Registros_usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `Registros_usuarios`
--
ALTER TABLE `Registros_usuarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
