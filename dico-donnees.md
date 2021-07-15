# CHERCHE TON MUSICIEN - DICTIONNAIRE DE DONNEES


## USER

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|Unique identifier for the user|
|FIRSTNAME|VARCHAR(50)|NOT NULL|Firstname of the user|
|LASTNAME|VARCHAR(50)|NOT NULL|Lastname of the user|
|PSEUDONYM|VARCHAR(50)|NOT NULL|Unique pseudonym of the user|
|EMAIL|VARCHAR(150)|NOT NULL|Email of the user|
|PASSWORD|VARCHAR(100)|NOT NULL|Password of the user|
|AGE|TINYINT|NULL, UNSIGNED|Age of the user|
|GENDER|VARCHAR(50)|NOT NULL|Gender of the user|
|INFLUENCES|TEXT|NULL|Influences of the user (groups, artists, etc)|
|AVAILABILITY|TEXT|NULL|When the user is available|
|EXPERIENCE|TINYINT|NULL|Number of years that the user is playing music|
|BIO|TEXT|NULL|Description of the user|
|PICTURE|VARCHAR(255)|NULL|Profil picture of the user|
|PERIMETER|INT|NULL, UNSIGNED|Perimeter where the user can move around|
|STATUS|TINYINT|NOT NULL, UNSIGNED, DEFAULT 1|Status of the user (1 = activ, 2 = inactive)|
|CREATED_AT|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|Creation date|
|UPDATED_AT|TIMESTAMP|NULL|Update date|


## INSTRUMENT

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|NAME|VARCHAR(50)|NOT NULL|Name of the instrument|
|ICON|VARCHAR(255)|NOT NULL|Icon of the instrument|
|CREATED_AT|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|Creation date|
|UPDATED_AT|TIMESTAMP|NULL|Update date|


## LOCATION

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|NAME|VARCHAR(50)|NOT NULL|Department|
|NUMBER|TINYINT|NOT NULL|Number of the department|
|CREATED_AT|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|Creation date|
|UPDATED_AT|TIMESTAMP|NULL|Update date|


## GENRE

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|NAME|VARCHAR(50)|NOT NULL|Name of the music type|
|CREATED_AT|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|Creation date|
|UPDATED_AT|TIMESTAMP|NULL|Update date|