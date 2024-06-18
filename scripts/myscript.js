function show_edit_user(id, fname, lname, city, dob, phone, gender, Password) {
  let box = document.getElementById("box");
  let form = `<div class="edit_user">
        <form method="post" action="admin_edit_profile.php?action=saveuser">
          <p>${id}</p>
          <input type="hidden" name="id" value="${id}" />
          <label>first name</label>
          <input
            type="text"
            name="fname"
            placeholder="First name"
            value="${fname}"
            required
          />
          <label>last name</label>
          <input
            type="text"
            name="lname"
            placeholder="Last name"
            value="${lname}"
            required
          />
          <!--select-->
          
  
          <label>city</label>
          <input
            type="text"
            name="city"
            placeholder="city"
            value="${city}"
            required
          />
          <label>date of birth</label>
          <input
            type="text"
            name="dob"
            placeholder="date of birth"
            value="${dob}"
            required
          />
          <label>phone</label>
          <input
            type="text"
            name="phone"
            placeholder="phone"
            value="${phone}"
            required
          />
          <label>phone</lable>          
          <input
            type="text"
            name="gender"
            placeholder="gender"
            value="${gender}"
            required
          />
          <label>password</label>
          <input
            type="text"
            name="password"
            placeholder="Password"
            value="${Password}"
            required
          />
          <div class="form-group submit-btn">
          <input type="submit" value="save">
        </div>
        </form>
      </div>`;

  box.innerHTML = form;
}
function show_blogs(title, date, id) {
  let output = document.getElementById("post-m");
  let form = "";
  for (let i = 0; i < id.length; i++) {
    form += `
            <div class="blog-post">
                <form method="post" action="f_blog.php">
                <input type="hidden" name="id" value="${id[i]}">
                    <h2>${title[i]}</h2>
                    <p>${date[i]}</p>
                    <input type="submit" value="see more">
                </form>
            </div>
        `;
  }
  output.innerHTML = form;
}
function get_blogs(title, date, id) {
  let output1 = document.getElementById("blog-m");

  let form = "";
  for (let i = 0; i < id.length; i++) {
    form += `
          <div class="blog-post">
              <form method="post" action="blogs.php?action=d-blog">
              <input type="hidden" name="id" value="${id[i]}">
                  <h2>${title[i]}</h2>
                  <p>${date[i]}</p>
                  <input type="submit" value="delete">
              </form>
          </div>
      `;
  }
  output1.innerHTML = form;
}

function show_users(Id, fname, lname, dob, gender, phone, city) {
  let output = document.getElementById("outputbox");

  let form = `
    <div class="users_info">
       <table>
        <tr>
          <th>ID</th>
          <th>first name</th>
          <th>last name</th>
          <th>date of birth </th>
          <th>gender</th>
          <th>phone</th>
          <th>city</th>
        </tr>
      
     
    `;

  for (let i = 0; i < Id.length; i++) {
    form += `
        <tr>
          <td>${Id[i]}</td>
          <td>${fname[i]}</td>
          <td>${lname[i]}</td>
          <td>${dob[i]}</td>
          <td>${gender[i]}</td>
          <td>${phone[i]}</td>
          <td>${city[i]}</td>
        </tr> 
      
      `;
  }

  form += ` </table>
  
         
        </div>`;

  output.innerHTML = form;
}
const d = new Date();

var DATE =
  String(d.getDate()) +
  "/" +
  String(d.getMonth()) +
  "/" +
  String(d.getFullYear());

var TIME = d.toLocaleString(
  "en-US",

  {
    hour: "numeric",

    minute: "numeric",

    hour12: true,
  }
);
var dateTime = DATE + ", " + TIME;

document.getElementById("blogDate").value = dateTime;

function show_crs(id, crs_name, crs_cridt) {
  let output = document.getElementById("crs-m");

  let form = `
    <table>
      <tr>
        <th>name</th>
        <th>credit</th>
        <th>Delete</th>
      </tr>
  `;

  for (let i = 0; i < id.length; i++) {
    form += `
      <tr>
        <td>${crs_name[i]}</td>
        <td>${crs_cridt[i]}</td>
        <td>
          <form method="post" action="d_crs.php">
            <input type="hidden" name="id" value="${id[i]}">
            <input type="submit" value="Delete" name="delete">
          </form>
        </td>
      </tr>
    `;
  }

  form += `</table>`;
  output.innerHTML = form;
}
function show_grade(id, grade) {
  let output = document.getElementById("grade");

  let form = `
    <table>
      <tr>
        <th>course id</th>
        <th>grade</th>
      </tr>
  `;

  for (let i = 0; i < id.length; i++) {
    form += `
      <tr>
        <td>${id[i]}</td>
        <td>${grade[i]}</td>
      </tr>
    `;
  }

  form += `</table>`;
  output.innerHTML = form;
}
function show_sec(id, clas, ins, crs) {
  let output = document.getElementById("sec");
  console.log("Hello, World!");


  let form = `
    <table class="instructor">
    <thead>
      <tr>
        <th>section id</th>
        <th>class</th>
        <th>instructor</th>
        <th>course id</th>
        <th>info</th>
        
      </tr>
      </thead>
  `;

  for (let i = 0; i < id.length; i++) {
    form += `
    <tbody>
      <tr>
        <td>${id[i]}</td>
        <td>${clas[i]}</td>
        <td>${ins[i]}</td>
        <td>${crs[i]}</td>
                    <td><form action='section.php' method='post'>
                    <input type="hidden" name='sec_id' value="${id[i]}">
                    <input type="hidden" name="course" value="${crs[i]}">

                                <button type='submit'>View Students</button>
                            </form></td>
      </tr>
      </tbody>
    `;
  }

  form += `</table>`;
  output.innerHTML = form;
}
function edit_grade(std_id, crs) {
  let output = document.getElementById("in_grade");

  let form = `
    <table>
      <tr>
        <th>student id</th>
        <th>grade</th>
      </tr>
  `;

  for (let i = 0; i < std_id.length; i++) {
    form += `
      <tr>
        <td>${std_id[i]}</td>
        <td><form action='../backend/inserting_grades.php' method='post'>
                        <input type='hidden' name='std_id' value='${std_id[i]}'> 
                        <input type='hidden' name='crs_id' value='${crs[i]}''> 
                        <input type='text' placeholder='grade' name='grade' id='grade'>
                        <button type='submit'>add</button>
                      </form></td>
      </tr>
    `;
  }

  form += `</table>`;
  output.innerHTML = form;
}
function in_ids(in_ids) {
  let output = document.getElementById("in_ids"); 
  let form = ``;
  for (let i = 0; i < in_ids.length; i++) {
    form += `<option value='${in_ids[i]}'>${in_ids[i]}</option>`;
  }
  output.innerHTML = form;
}
