const handleNavigate = (way) => {
  // check if the way is tournament and navigate to tournament page
  if (way === "tournament") {
    window.location.href = "../tournament/tournament.html";
  } else {
    // navigate to the champinoship page
    window.location.href = "../championships/championship.html";
  }
};
