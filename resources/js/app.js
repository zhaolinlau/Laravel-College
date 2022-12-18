import './bootstrap';
import '../css/app.min.css';
import "../../node_modules/@fortawesome/fontawesome-free/css/all.min.css";
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.min'
import '../../node_modules/mdb-ui-kit/js/mdb.min'
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
