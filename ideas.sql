CREATE TABLE `ideas` (
  `id` int(11) NOT NULL,
  `idea` text NOT NULL,
  `date` date NOT NULL,
  `upvotes` int(11) NOT NULL DEFAULT 0
);

INSERT INTO `ideas` (`id`, `idea`, `date`, `upvotes`) VALUES
(1, 'Cooking eggs may seem simple but it’s super easy to mess up! Reduce the risk of ruining your eggs with a helpful cooker!', '2021-03-12', 7),
(2, 'Isn’t it just the worst when you lose your keys? It always seems to happen when you are in a rush! Well, help yourself out with this handy key locator!', '2021-03-06', 5),
(3, 'A rocking chair/crib combo. What a genius idea!\r\n', '2021-03-31', 3);

ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ideas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
