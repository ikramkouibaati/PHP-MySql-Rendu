create database videogames;
CREATE TABLE videogames.games (
  id INT NOT NULL,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  release_date DATE NOT NULL,
  poster VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO games (id, title, description, release_date, poster, price) VALUES
  (1, 'The Legend of Zelda: Breath of the Wild', 'Explore the vast world of Hyrule, discover hidden secrets, and save Princess Zelda in this critically acclaimed open-world adventure game.', '2017-03-03', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ebay.fr%2Fitm%2F184020327184&psig=AOvVaw1CrInELb6ttQSH0aZFPNNJ&ust=1678335492799000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKCa_oi9y_0CFQAAAAAdAAAAABAE', 59.99),
  (2, 'Red Dead Redemption 2', 'Set in the wild west, follow the story of outlaw Arthur Morgan as he navigates a changing world and tries to outrun the law.', '2018-10-26', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F81KbdP5MDDL._AC_SX425_.jpg&imgrefurl=https%3A%2F%2Fwww.amazon.fr%2FCraftylittlepenguin-Redemption-Poster-Online-RDR2-1582%2Fdp%2FB07JL4T8KT&tbnid=8hpGQl96fj6UHM&vet=12ahUKEwjmkt-hvcv9AhXksCcCHTp_C80QMygAegQIARAl..i&docid=aOw4XZ28ySkFJM&w=425&h=239&q=red_dead_redemption_2_poster.jpg&client=firefox-b-d&ved=2ahUKEwjmkt-hvcv9AhXksCcCHTp_C80QMygAegQIARAl', 49.99),
  (3, 'Super Mario Odyssey', 'Join Mario on a globe-trotting adventure to save Princess Peach from the nefarious Bowser, using his trusty hat and a variety of new abilities.', '2017-10-27', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.europosters.fr%2Faffiches-et-posters%2Fsuper-mario-odyssey-collage-v41776&psig=AOvVaw3GDDrPUx0x1avpIWv89ITC&ust=1678335572098000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMil8669y_0CFQAAAAAdAAAAABAE', 49.99),
  (4, 'The Last of Us Part II', 'Follow Ellie on a harrowing journey through a post-apocalyptic world as she seeks revenge against those who wronged her.', '2020-06-19', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.europosters.fr%2Faffiches-et-posters%2Fthe-last-of-us-2-ellie-v56889&psig=AOvVaw1TkdZhGyG9hs8fy0OG14jy&ust=1678335594826000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCJDt3Lm9y_0CFQAAAAAdAAAAABAE', 59.99),
  (5, 'Halo: Infinite', 'Join Master Chief as he fights to save humanity in the latest installment of the Halo franchise, featuring epic battles and stunning visuals.', '2021-12-08', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.posters.fr%2Fhalo-infinite-planetside-poster-61x91-5cm&psig=AOvVaw0vDWN6LWLXmt2tJXlwqKYN&ust=1678335636174000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMjgrM29y_0CFQAAAAAdAAAAABAE', 69.99),
  (6, 'Cyberpunk 2077', 'Explore the gritty streets of Night City and make your mark as a mercenary in this action-packed RPG set in a dystopian future.', '2020-12-10', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.reddit.com%2Fr%2Fcyberpunkgame%2Fcomments%2Fcbfmrn%2Fcyberpunk_2077_hires_poster_ready_to_print%2F&psig=AOvVaw21y1Lvwxf6q3EzKHfRJ2sO&ust=1678335658720000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMizmti9y_0CFQAAAAAdAAAAABAE', 59.99),
  (7, 'God of War', 'Join Kratos, the God of War, on his journey to slay the gods of Olympus and seek redemption for his past sins.', '2018-04-20', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.europosters.fr%2Faffiches-et-posters%2Fplaystation-god-of-war-v81360&psig=AOvVaw3FwYJfRLYCfMLEz6b9Z-QF&ust=1678335680214000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKiHquK9y_0CFQAAAAAdAAAAABAE', 39.99),
  (8, 'Assassin''s Creed Valhalla', 'Lead your Viking clan to conquer England in the latest entry in the Assassin''s Creed franchise, featuring a massive open world and thrilling combat.', '2020-11-10', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.europosters.fr%2Faffiches-et-posters%2Fassassin-s-creed-valhalla-standard-edition-v71311&psig=AOvVaw0f3x5CoKpL_ffFOzAl3m4Y&ust=1678335711034000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCICsg_G9y_0CFQAAAAAdAAAAABAE', 49.99),
  (9, 'Resident Evil Village', 'Follow Ethan Winters as he navigates a mysterious village filled with horrors in the latest installment of the Resident Evil series.', '2021-05-07', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.redbubble.com%2Ffr%2Fi%2Fposter%2FResident-Evil-Village-par-lilipvf%2F77733231.LVTDI&psig=AOvVaw12-OaIg0sRVeRLkKYQVVJp&ust=1678335741023000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCJD-q_-9y_0CFQAAAAAdAAAAABAE', 59.99),
  (10, 'Death Stranding', 'Embark on a journey across a desolate landscape as you deliver packages and unravel the mysteries of a world on the brink of collapse.', '2019-11-08', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.etsy.com%2Ffr%2Flisting%2F942336249%2Fdeath-stranding-poster-impression&psig=AOvVaw3lHBrNxNwMN87FqEyJemSx&ust=1678335770963000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKikxo2-y_0CFQAAAAAdAAAAABAE', 49.99);



CREATE TABLE videogames.admin
(
	id tinyint unsigned PRIMARY KEY auto_increment,
	email varchar(100) unique, 
	password varchar(100)
)

insert into videogames.admin(email, password)
values ("admin@h3hitema.fr","b2647a7e9b8592254f7b2d86790263ac");  
