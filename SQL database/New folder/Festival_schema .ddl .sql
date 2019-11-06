create table festival_schema.Festival
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

create table festival_schema.Profile
(
	profileID int not null
		constraint Profile_pk
			primary key nonclustered,
	profile_owner varchar(100),
	profile_settings varchar(500)
)
go

create table festival_schema.Users
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
	on festival_schema.Users (user_accountID)
go

create table festival_schema.Venue
(
	venueID int not null,
	venue_name varchar(50) not null,
	venue_location char not null,
	venue_rating int
)
go

create unique index Venue_venue_location_uindex
	on festival_schema.Venue (venue_location)
go

