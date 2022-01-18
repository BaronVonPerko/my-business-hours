document.addEventListener("DOMContentLoaded", function() {
  const monday = document.getElementById("mbh_monday_hours");
  const mondayClosed = document.getElementById("mbh_monday_hours_closed");
  const tuesday = document.getElementById("mbh_tuesday_hours");
  const tuesdayClosed = document.getElementById("mbh_tuesday_hours_closed");
  const wednesday = document.getElementById("mbh_wednesday_hours");
  const wednesdayClosed = document.getElementById("mbh_wednesday_hours_closed");
  const thursday = document.getElementById("mbh_thursday_hours");
  const thursdayClosed = document.getElementById("mbh_thursday_hours_closed");
  const friday = document.getElementById("mbh_friday_hours");
  const fridayClosed = document.getElementById("mbh_friday_hours_closed");
  const saturday = document.getElementById("mbh_saturday_hours");
  const saturdayClosed = document.getElementById("mbh_saturday_hours_closed");
  const sunday = document.getElementById("mbh_sunday_hours");
  const sundayClosed = document.getElementById("mbh_sunday_hours_closed");

  if(mondayClosed.checked) monday.disabled = true;
  if(tuesdayClosed.checked) tuesday.disabled = true;
  if(wednesdayClosed.checked) wednesday.disabled = true;
  if(thursdayClosed.checked) thursday.disabled = true;
  if(fridayClosed.checked) friday.disabled = true;
  if(saturdayClosed.checked) saturday.disabled = true;
  if(sundayClosed.checked) sunday.disabled = true;

  mondayClosed.addEventListener("change", function() {
    toggle_input(monday, this.checked);
  });

  tuesdayClosed.addEventListener("change", function() {
    toggle_input(tuesday, this.checked);
  });

  wednesdayClosed.addEventListener("change", function() {
    toggle_input(wednesday, this.checked);
  });

  thursdayClosed.addEventListener("change", function() {
    toggle_input(thursday, this.checked);
  });

  fridayClosed.addEventListener("change", function() {
    toggle_input(friday, this.checked);
  });

  saturdayClosed.addEventListener("change", function() {
    toggle_input(saturday, this.checked);
  });

  sundayClosed.addEventListener("change", function() {
    toggle_input(sunday, this.checked);
  });
});

function toggle_input(date, status) {
  if(status) {
    date.disabled = true;
    date.value = "";
  } else {
    date.disabled = false;
  }
}