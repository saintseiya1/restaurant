SELECT sum(guests_total)
FROM restaurant.reservations
WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

SELECT fname, role_id
FROM users
INNER JOIN role_user ON role_user.user_id = users.id 
INNER JOIN roles ON roles.id = role_user.role_id

SELECT COUNT(*) AS total
FROM users
INNER JOIN role_user ON role_user.user_id = users.id 
INNER JOIN roles ON roles.id = role_user.role_id
WHERE role_id = 2

SELECT DATE_FORMAT(created_at,"%Y-%m0%d") AS reserved_day,
    (sum(guests_total)*47) AS estimated_earnings,
    COUNT(*) AS total_reservations
    FROM restaurant.reservations
    GROUP BY reserved_day DESC;