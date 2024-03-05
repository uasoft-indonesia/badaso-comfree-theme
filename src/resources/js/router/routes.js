import Pages from "./../pages/index.vue";

let prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/comfree-theme-configuration",
    name: "ComfreeThemeConfigurationBrowse",
    component: Pages,
    meta: {
      title: "Comfree Theme Configuration",
      useComponent: "AdminContainer"
    },
  },
];
