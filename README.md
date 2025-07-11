# 🎓 Portfolio Web App for Freshers

A personal **Portfolio Website** built using modern web technologies to showcase skills, projects, and contact form — specifically crafted for **students and freshers** to impress **recruiters**.

---

## 🧾 Project Details

- **Project Name**: portfolio_vuejs
- **Project Title**: Professional Portfolio Website for Fresher Job Seekers  using vue.js3-compositionApi
- **Project Aim**:  
  To build a responsive, interactive, and dynamic personal portfolio that can be shared with HRs, recruiters, and companies to showcase technical & soft skills, academic projects, and contact information.

------------



----------
## 💡 Features

- 📌 Home Page (Intro, welcome message)
- 👤 About Section (Personal summary, education, career goal)
- 💼 Projects (Live/demo project showcase with description)
- 🛠 Skills (Core tech skills + animated progress bar rating)
- 📬 Contact (Dynamic contact form via PHP API + MySQL)

---

## 🔧 Tech Stack Used

### 🔹 Frontend:
- ✅ HTML5
- ✅ CSS3
- ✅ Vue.js3 (Composition API)
- ✅ Vue Router
- ✅ Pinia
- ✅ Axios (for API call)
- ✅ Bootstrap

### 🔹 Backend:
- ✅ PHP (API for contact form)
- ✅ MySQL (to store contact queries)
- ✅ XAMPP (for localhost)

---

## 🖥 How to Run the Portfolio Website Locally

### 🔸 1. Clone the Repository

```bash
git clone https://github.com/Rajkumarsingh272002/portfolio_vuejs.git
cd portfolio_vuejs


### 🔸  2. Setup Frontend (Vue.js)
npm install
npm run dev
Visit: http://localhost:5173

🔸 3. Setup Backend (PHP API)
Move the php-api folder to your XAMPP htdocs/ directory

Start Apache and MySQL using XAMPP Control Panel

Import the contact_form.sql file into your MySQL database

Update db_config.php file with your database credentials if needed

PHP API Endpoint Example:
http://localhost/php-api/contact-form-api.php

--------------

📁 Folder Structure Overview
portfolio_vuejs/
│──public\asset\image(0.png,1.png,2.png,3.png,4.png,Rajkumar_Singh_resume2.pdf)
├── src/
│   ├── views/         # Vue pages (Home.vue, About.vue, Skills.vue etc.)
│   ├── components/    # header, Footer, .
│   ├──composable_messageProcess  #contactProcess.js
│   ├──router/          #index.js
│   ├──view             # About.vue,contact.vue,home.vue,projects.vues , kill.vue

├── php-api(messageApi.php)/           # PHP backend for contact form
├── portfolio.sql   # MySQL DB to store messages
├── README.md          # You are reading this 😄

note:plz 1---used xampp and keep my folder (Pro3_portfolio) into htdocs and start (mysql,Apache-server) . 2----plz Setup Frontend (Vue.js) then open my folder(portfolio) as you download from github then open this folder with visual-studio-code. 3----copy path(goto terimanl you found path and  you  do copy path only like:(\portfolio)) . 4---open cmd and type (cd..) then enter this you do continue while you not found like this(C:\>) .when you found this in last like:(C:\>) then finally paste like:((C:\portfolio>))  as you copy done already  from terminal and then enter.  4.....last and finally type( npm run dev)  like:C:\portfolio>npm run dev  .  5.goto browser type(http://localhost:5173/) you project(portfolio_vuejs) successfully run.
