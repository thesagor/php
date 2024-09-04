/*select *
from employes
where City = 'Boston';*/

/*-- SELECT With Sort
select *
from employes
order by Salary desc
limit 5;*/


/*update employes
set City = 'New York'
where City = 'Memphis';*/

/*select *
from employes
where City = 'New York'
order by Salary desc;*/

/*# Write SELECT With GROUP
select *
from employes
group by City;*/

/*-- SELECT Unique
select distinct City
from employes;*/


/*-- select max
select max(Salary)
from employes as highest;*/

/*select *
from employes
where Salary = (select max(Salary) from employes);*/

/*-- select min
select min(Salary)
from employes as min;*/

/*select *
from employes
where Salary = (select min(Salary) from employes);*/

/*-- select avg
select avg(Salary)
from employes as average;*/
/*-- select sum
select sum(Salary)
from employes as total;*/

/*-- select count
select count(*)
from employes as total;*/

-- select distinct
select distinct City
from employes;