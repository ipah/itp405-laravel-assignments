select cr.headline,cr.review, b.title, a.last_name, p.publisher_name 
from customer_reviews cr
join books b on b.id = cr.book_id
join authors a on a.id = b.author_id
join publishers p on p.id = b.publisher_id;