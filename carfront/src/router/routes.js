import Index from "pages/Index";
import Ruta from "pages/Ruta";
import Rutaadmin from "pages/Rutaadmin";
import Rubro from "pages/Rubro";
import Photo from "pages/Photo";
import Video from "pages/Video";
import Rol from "pages/Rol";
const routes = [
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: Photo},
      { path: "rutaadmin", component: Rutaadmin },
      { path: "ruta", component: Ruta },
      { path: "video", component: Video },
      { path: "rol", component: Rol },
      { path: "rubro/:id", component: Rubro },
      { path: "aviso", component: Index },
    ],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/:catchAll(.*)*",
    component: () => import("pages/Error404.vue"),
  },
];

export default routes;
