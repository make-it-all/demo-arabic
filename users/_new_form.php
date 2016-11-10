<form action="/users?flash=User+Created" method="POST" class="with_panels">

  <div id="main_form_panel">




    <div class="field">
      <label>Name</label>
      <input type="text" name="name" value="James Limon"/>
    </div>
    <div class="field">
      <label>Email</label>
      <input type="email" name="name" value="james.limon@make-it-all.co.uk"/>
    </div>
    <div class="field">
      <label>Telephone Number</label>
      <input type="telephone" name="name" value="07787 514314"/>
    </div>
    <div class="field">
      <label>Password</label>
      <input type="password" name="name"/>
    </div>
    <div class="actions">
      <input type="submit" name="commit" value="Update User"/ >
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_2">
      <input type="radio" class="tab_controller" name="tab" id="tab_3">
      <input type="radio" class="tab_controller" name="tab" id="tab_4">
      <div class="tab_heads_container">
        <label for="tab_1">Info</label>
        <label for="tab_2">Roles</label>
        <label for="tab_3">Languages</label>
        <label for="tab_4">Specialisations</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <div class="field">
            <label>Personnel ID</label>
            <input type="text" name="name"/>
          </div>
          <div class="field">
            <label>Job Title</label>
            <input type="text" name="name" value="Cleaner"/>
          </div>
          <div class="field">
            <label>Department</label>
            <input type="text" name="name" value="Cleaning"/>
          </div>
          <div class="field">
            <label>Department Number</label>
            <input type="text" name="name" value="007"/>
          </div>
          <div class="actions">
            <input type="submit" name="commit" value="Update User"/ >
          </div>
        </div>
        <div class="tab_panel">
          <select multiple="multiple">
            <option value="microsoft office">Help Desk Operator</option>
            <option value="microsoft office">Specialist</option>
            <option value="microsoft office">Admin</option>
            <option value="microsoft office">Lboro Admin</option>
          </select>
        </div>
        <div class="tab_panel">
          <select multiple="multiple">
            <option value="microsoft office">English</option>
            <option value="microsoft office">German</option>
            <option value="microsoft office">Arabic</option>
            <option value="microsoft office">Chinese</option>
          </select>
        </div>
        <div class="tab_panel">
          history of user
        </div>
      </div>
    </div>


  </div>

</form>
