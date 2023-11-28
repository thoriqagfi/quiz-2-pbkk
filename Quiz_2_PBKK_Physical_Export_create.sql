-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2023-11-28 12:08:49.494

-- tables
-- Table: cinema
CREATE TABLE cinema (
    id int  NOT NULL,
    name varchar(50)  NOT NULL,
    address varchar(100)  NOT NULL,
    capacity int  NOT NULL,
    price int  NOT NULL,
    CONSTRAINT cinema_pk PRIMARY KEY (id)
);

-- Table: movie
CREATE TABLE movie (
    id int  NOT NULL,
    title varchar(100)  NOT NULL,
    genre varchar(100)  NOT NULL,
    release_date date  NOT NULL,
    duration int  NOT NULL,
    synopsis longtext  NOT NULL,
    poster varchar(100)  NOT NULL,
    rating decimal(5,1)  NOT NULL,
    CONSTRAINT movie_pk PRIMARY KEY (id)
);

-- Table: movie_cinema
CREATE TABLE movie_cinema (
    movie_id int  NOT NULL,
    cinema_id int  NOT NULL,
    showtime time  NOT NULL,
    CONSTRAINT movie_cinema_pk PRIMARY KEY (movie_id,cinema_id)
);

-- Table: ticket
CREATE TABLE ticket (
    id int  NOT NULL,
    seat int  NOT NULL,
    price int  NOT NULL,
    movie_id int  NOT NULL,
    cinema_id int  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT ticket_pk PRIMARY KEY (id)
);

-- Table: transaction
CREATE TABLE transaction (
    id int  NOT NULL,
    method varchar(50)  NOT NULL,
    email varchar(100)  NOT NULL,
    cardholder varchar(100)  NOT NULL,
    card_number varchar(100)  NOT NULL,
    date date  NOT NULL,
    cvv int  NOT NULL,
    status varchar(50)  NOT NULL,
    seat int  NOT NULL,
    amount int  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT transaction_pk PRIMARY KEY (id)
);

-- Table: user
CREATE TABLE user (
    id int  NOT NULL,
    name varchar(100)  NOT NULL,
    username varchar(100)  NOT NULL,
    password varchar(100)  NOT NULL,
    email varchar(100)  NOT NULL,
    role varchar(100)  NOT NULL,
    CONSTRAINT user_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: movie_cinema_cinema (table: movie_cinema)
ALTER TABLE movie_cinema ADD CONSTRAINT movie_cinema_cinema FOREIGN KEY movie_cinema_cinema (cinema_id)
    REFERENCES cinema (id);

-- Reference: movie_cinema_movie (table: movie_cinema)
ALTER TABLE movie_cinema ADD CONSTRAINT movie_cinema_movie FOREIGN KEY movie_cinema_movie (movie_id)
    REFERENCES movie (id);

-- Reference: ticket_bioskop (table: ticket)
ALTER TABLE ticket ADD CONSTRAINT ticket_bioskop FOREIGN KEY ticket_bioskop (cinema_id)
    REFERENCES cinema (id);

-- Reference: ticket_movie (table: ticket)
ALTER TABLE ticket ADD CONSTRAINT ticket_movie FOREIGN KEY ticket_movie (movie_id)
    REFERENCES movie (id);

-- Reference: ticket_user (table: ticket)
ALTER TABLE ticket ADD CONSTRAINT ticket_user FOREIGN KEY ticket_user (user_id)
    REFERENCES user (id);

-- Reference: transaction_user (table: transaction)
ALTER TABLE transaction ADD CONSTRAINT transaction_user FOREIGN KEY transaction_user (user_id)
    REFERENCES user (id);

-- End of file.

