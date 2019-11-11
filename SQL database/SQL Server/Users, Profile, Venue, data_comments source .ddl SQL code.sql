create schema festival_schema
go

create table Artist
(
	artistID int not null
		constraint Artist_pk
			primary key nonclustered,
	artist_name varchar(50) not null,
	artist_spotify char,
	artist_instagram char,
	artist_twitter char
)
go

create table Content
(
	contentID int not null
		constraint Content_pk
			primary key nonclustered,
	content_type varchar(100),
	content_timestamp date
)
go

create table [Event Organizers]
(
	organizerID int not null,
	organizerName varchar(100) not null
		constraint [Event Organizers_pk]
			primary key nonclustered,
	organizer_accountID int not null,
	organizer_rating int
)
go

create table Festival
(
	festivalID int not null
		constraint Festival_pk
			primary key nonclustered,
	festival_name varchar(50) not null,
	festival_lineup varchar(500) not null,
	festival_date date not null,
	festival_lineup_times datetime
)
go

create table Profile
(
	profileID int not null
		constraint Profile_pk
			primary key nonclustered,
	profile_owner varchar(100),
	profile_settings varchar(500)
)
go

create table Users
(
	userID int not null
		constraint Users_pk
			primary key nonclustered,
	user_login char,
	user_password char,
	user_accountID int not null
)
go

create unique index Users_user_accountID_uindex
	on Users (user_accountID)
go

create table Venue
(
	venueID int not null,
	venue_name varchar(50) not null,
	venue_location char not null,
	venue_rating int
)
go

create unique index Venue_venue_location_uindex
	on Venue (venue_location)
go

create table data_comments
(
	commentID int not null
		constraint data_comments_pk
			primary key nonclustered,
	comment_userID int not null,
	comment_timestamp date not null
)
go

create unique index data_comments_comment_userID_uindex
	on data_comments (comment_userID)
go

create table data_homepage
(
	homepageID int not null
		constraint data_homepage_pk
			primary key nonclustered
)
go

create table developers
(
	devID int not null
		constraint developers_pk
			primary key nonclustered,
	dev_role char
)
go

