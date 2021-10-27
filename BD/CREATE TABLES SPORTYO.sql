CREATE TABLE sportyo_users (
    cod_user VARCHAR2(10),
    username VARCHAR2(200),
    password VARCHAR2(4000),
    email    VARCHAR2(4000)
);

ALTER TABLE sportyo_users 
    ADD CONSTRAINT cod_user_sportyo PRIMARY KEY ( cod_user );

COMMIT;

CREATE TABLE sportyo_address(
COD_USER VARCHAR2(10),
COD_ADDRESS VARCHAR2(10),
ADDRESS VARCHAR2(4000),
COMPLEMENT VARCHAR2(500),
ADDRESS_NUMBER INTEGER,
DISTRICT VARCHAR2(4000),
CITY VARCHAR2(4000),
STATE CHAR(2)
);

ALTER TABLE sportyo_address 
    ADD CONSTRAINT cod_user_address_fk FOREIGN KEY ( cod_user )
        REFERENCES sportyo_users ( cod_user );

ALTER TABLE sportyo_address
    ADD CONSTRAINT cod_sportyo_address PRIMARY KEY ( cod_address );

CREATE TABLE sportyo_people(
 COD_USER VARCHAR2(10),
 COD_PEOPLE VARCHAR2(10),
 COD_ADDRESS VARCHAR2(10),
 FIRST_NAME VARCHAR2(200),
 LAST_NAME VARCHAR2(500),
 CPF NUMBER(11),
 BIRTH_DATE DATE,
 SEX VARCHAR2(9),
 EMAIL VARCHAR2(4000),
 OPTIN_NEWSLETTER CHAR(1),
 FG_LICENCE_ACEPTED CHAR(1)
);
ALTER TABLE sportyo_people
    ADD CONSTRAINT cod_user_people_fk FOREIGN KEY ( cod_user )
        REFERENCES sportyo_users ( cod_user );

ALTER TABLE sportyo_people
    ADD CONSTRAINT cod_address_people_fk FOREIGN KEY ( cod_address )
        REFERENCES sportyo_address ( cod_address );


ALTER TABLE sportyo_people
    ADD CONSTRAINT cod_people_sportyo PRIMARY KEY ( cod_people );

COMMIT;