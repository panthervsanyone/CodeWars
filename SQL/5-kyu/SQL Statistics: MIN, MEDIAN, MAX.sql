/*
 For this challenge you need to create a simple SELECT statement. Your task is to calculate the MIN,
 MEDIAN and MAX scores of the students from the results table.

Tables and relationship below:

Resultant table:
min
median
max
 */


SELECT MIN(score) as MIN,
percentile_cont(0.5) within group(order by score desc) as median,
    MAX(score) as max
FROM student INNER JOIN result
ON student.id = result.student_id;