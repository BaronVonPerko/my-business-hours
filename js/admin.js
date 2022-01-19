class AdminInputController
{
    mondayOpenHour = null;
    mondayOpenMinute = null;
    mondayCloseHour = null;
    mondayCloseMinute = null;
    mondayClosed = false;
    tuesdayOpenHour = null;
    tuesdayOpenMinute = null;
    tuesdayCloseHour = null;
    tuesdayCloseMinute = null;
    tuesdayClosed = false;
    wednesdayOpenHour = null;
    wednesdayOpenMinute = null;
    wednesdayCloseHour = null;
    wednesdayCloseMinute = null;
    wednesdayClosed = false;
    thursdayOpenHour = null;
    thursdayOpenMinute = null;
    thursdayCloseHour = null;
    thursdayCloseMinute = null;
    thursdayClosed = false
    fridayOpenHour = null;
    fridayOpenMinute = null;
    fridayCloseHour = null;
    fridayCloseMinute = null;
    fridayClosed = false;
    saturdayOpenHour = null;
    saturdayOpenMinute = null;
    saturdayCloseHour = null;
    saturdayCloseMinute = null;
    saturdayClosed = false;
    sundayOpenHour = null;
    sundayOpenMinute = null;
    sundayCloseHour = null;
    sundayCloseMinute = null;
    sundayClosed = false;

    constructor() {
        this.mondayOpenHour = document.getElementById("mbh_monday_hours_open_h");
        this.mondayOpenMinute = document.getElementById("mbh_monday_hours_open_m");
        this.mondayCloseHour = document.getElementById("mbh_monday_hours_close_h");
        this.mondayCloseMinute = document.getElementById("mbh_monday_hours_close_m");
        this.mondayClosed = document.getElementById("mbh_monday_hours_closed");
        this.tuesdayOpenHour = document.getElementById("mbh_tuesday_hours_open_h");
        this.tuesdayOpenMinute = document.getElementById("mbh_tuesday_hours_open_m");
        this.tuesdayCloseHour = document.getElementById("mbh_tuesday_hours_close_h");
        this.tuesdayCloseMinute = document.getElementById("mbh_tuesday_hours_close_m");
        this.tuesdayClosed = document.getElementById("mbh_tuesday_hours_closed");
        this.wednesdayOpenHour = document.getElementById("mbh_wednesday_hours_open_h");
        this.wednesdayOpenMinute = document.getElementById("mbh_wednesday_hours_open_m");
        this.wednesdayCloseHour = document.getElementById("mbh_wednesday_hours_close_h");
        this.wednesdayCloseMinute = document.getElementById("mbh_wednesday_hours_close_m");
        this.wednesdayClosed = document.getElementById("mbh_wednesday_hours_closed");
        this.thursdayOpenHour = document.getElementById("mbh_thursday_hours_open_h");
        this.thursdayOpenMinute = document.getElementById("mbh_thursday_hours_open_m");
        this.thursdayCloseHour = document.getElementById("mbh_thursday_hours_close_h");
        this.thursdayCloseMinute = document.getElementById("mbh_thursday_hours_close_m");
        this.thursdayClosed = document.getElementById("mbh_thursday_hours_closed");
        this.fridayOpenHour = document.getElementById("mbh_friday_hours_open_h");
        this.fridayOpenMinute = document.getElementById("mbh_friday_hours_open_m");
        this.fridayCloseHour = document.getElementById("mbh_friday_hours_close_h");
        this.fridayCloseMinute = document.getElementById("mbh_friday_hours_close_m");
        this.fridayClosed = document.getElementById("mbh_friday_hours_closed");
        this.saturdayOpenHour = document.getElementById("mbh_saturday_hours_open_h");
        this.saturdayOpenMinute = document.getElementById("mbh_saturday_hours_open_m");
        this.saturdayCloseHour = document.getElementById("mbh_saturday_hours_close_h");
        this.saturdayCloseMinute = document.getElementById("mbh_saturday_hours_close_m");
        this.saturdayClosed = document.getElementById("mbh_saturday_hours_closed");
        this.sundayOpenHour = document.getElementById("mbh_sunday_hours_open_h");
        this.sundayOpenMinute = document.getElementById("mbh_sunday_hours_open_m");
        this.sundayCloseHour = document.getElementById("mbh_sunday_hours_close_h");
        this.sundayCloseMinute = document.getElementById("mbh_sunday_hours_close_m");
        this.sundayClosed = document.getElementById("mbh_sunday_hours_closed");

        if (this.mondayClosed.checked) this.toggle_input("monday", true);
        if (this.tuesdayClosed.checked) this.toggle_input("tuesday", true);
        if (this.wednesdayClosed.checked) this.toggle_input("wednesday", true);
        if (this.thursdayClosed.checked) this.toggle_input("thursday", true);
        if (this.fridayClosed.checked) this.toggle_input("friday", true);
        if (this.saturdayClosed.checked) this.toggle_input("saturday", true);
        if (this.sundayClosed.checked) this.toggle_input("sunday", true);

        this.mondayClosed.addEventListener("change", (e) => {
            this.toggle_input("monday", e.target.checked);
        });

        this.tuesdayClosed.addEventListener("change", (e) => {
            this.toggle_input("tuesday", e.target.checked);
        });

        this.wednesdayClosed.addEventListener("change", (e) => {
            this.toggle_input("wednesday", e.target.checked);
        });

        this.thursdayClosed.addEventListener("change", (e) => {
            this.toggle_input("thursday", e.target.checked);
        });

        this.fridayClosed.addEventListener("change", (e) => {
            this.toggle_input("friday", e.target.checked);
        });

        this.saturdayClosed.addEventListener("change", (e) => {
            this.toggle_input("saturday", e.target.checked);
        });

        this.sundayClosed.addEventListener("change", (e) => {
            this.toggle_input("sunday", e.target.checked);
        });
    }

    toggle_input(dayOfWeek, disable) {
        const openHour = this[`${dayOfWeek}OpenHour`];
        const openMinute = this[`${dayOfWeek}OpenMinute`];
        const closeHour = this[`${dayOfWeek}CloseHour`];
        const closeMinute = this[`${dayOfWeek}CloseMinute`];

        if (disable) {
            openHour.disabled = true;
            openMinute.disabled = true;
            closeHour.disabled = true;
            closeMinute.disabled = true;
            openHour.value = "";
            openMinute.value = "";
            closeHour.value = "";
            closeMinute.value = "";
        } else {
            openHour.disabled = false;
            openMinute.disabled = false;
            closeHour.disabled = false;
            closeMinute.disabled = false;
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    new AdminInputController();
});

