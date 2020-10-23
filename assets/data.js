const sublinks = [
  {
    page: 'account',
    links: [
      { label: 'payment', icon: 'fas fa-credit-card', url: 'login.php' },
      { label: 'terminal', icon: 'fas fa-credit-card', url: 'signup.php' },
    ],
  },
  {
    page: 'game',
    links: [
      { label: 'plugins', icon: 'fas fa-book', url: 'overview.php' },
      { label: 'libraries', icon: 'fas fa-book', url: 'races.php' },
      { label: 'plugins', icon: 'fas fa-book', url: 'classes.php' },

    ],
  },
  {
    page: 'about',
    links: [
      { label: 'about', icon: 'fas fa-briefcase', url: 'about.php' },
      { label: 'customers', icon: 'fas fa-briefcase', url: 'team.php' },
      { label: 'connect', icon: 'fas fa-briefcase', url: 'work.php' },
      { label: 'billing', icon: 'fas fa-briefcase', url: 'contact.php' },
    ],
  },
];

export default sublinks;
