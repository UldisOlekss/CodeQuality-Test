Šajos failos ir vienkārša, statiska HTML lapa ar skriptu failu un stilu failu.

Gan HTML, gan JS, gan CSS kodā ir lietas, ko derētu uzlabot.

Pārskati šos failus un salabo tajos visu, ko ieraugi kā uzlabojamu - vienalga, vai tā būtu sintakses,
semantikas, koda strukturēšanas vai citāda veida uzlabošana atbilstoši mūsdienu labajai praksei.

Mērķis ir panākt, lai beigās kods būtu tāds, ar kuru pats esi apmierināts.

Kad būsi visu pabeidzis, rezultātu saarhivē un atsūti atpakaļ.







Things done to code:

* Generated css file, moved scss to respective directory and expanded it as only css should be minimized
* Relpaced <font> with <span> with intention to remove inline style and an old no longer relative tag 
* Based on best practices for SEO secondary <h1> was removed
* Added for="" elements to labels
* Renamed id/class in english to keep consistency
* Removed "clearfloat" <div>'s as clear can be achieved in styles
* Refactored how js validates inputs as the code was repeating itself for each id
* Created php for conneciton to database
* Added a table to see current content of database
* Added php functinoality to send form data to MySQL database

Other points I'd like to add although current test is small but seem worth mentioning are:

* Expand Sass file structure and branch files for different purposes, add a seperate file for variables that repeat in code like text colors
* Would be better to remake input validation so that it validates correctly emails and phone numbers by more then just is something in the field