create table admins(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL,
    password varchar(255) NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE = InnoDB;

CREATE TABLE news(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL ,
    content LONGTEXT NOT NULL,
    created_at DATETIME NOT NULL,
    admin_id INT NOT NULL,
    FOREIGN KEY (admin_id) references admins(id) ON DELETE CASCADE
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE = InnoDB;

CREATE INDEX idx_news_admins ON news(admin_id);
CREATE INDEX idx_news_title ON news(title);
CREATE INDEX idx_news_created_at ON news(created_at);

CREATE INDEX idx_admins_login ON admins(login);
