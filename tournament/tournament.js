const handleNavigate = (way) => {
  // check if the way is list and navigate to list page
  if (way === "list") {
    window.location.href = "../tournament_list/tournament_list.php";
  } else {
    // navigate to the management page
    window.location.href = "../management/management.php";
  }
};
