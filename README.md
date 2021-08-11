# sql- introduction

3.1
SELECT * FROM groups;

3.2
SELECT name AS learner_name, email FROM learners\
WHERE id = 1;

4.1
UPDATE groups\
SET start_date = 2021/11/11;

4.2
UPDATE groups\
SET status = "There is a crocodile on campus and it won't leave. Please send help."
WHERE id = 1;

5.1
DELETE FROM learners\
WHERE id = 2; (RIP Bumba)

6.1
SELECT * FROM learners\
INNER JOIN groups ON learners.group_id = groups.id\
INNER JOIN coaches ON groups.coach_id = coaches.id

7.1
SELECT * FROM coaches\
LEFT JOIN groups ON coaches.id = groups.coach_id\
WHERE coaches.name = "Bert"

7.2
SELECT * FROM coaches\
LEFT JOIN groups ON coaches.id = groups.coach_id\
LEFT JOIN learners on groups.id = learners.group_id\
WHERE coaches.name = "Bert"