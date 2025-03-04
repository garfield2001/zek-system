import './bootstrap';

/* Datatables */
import moment from 'moment';
import jszip from 'jszip';
import pdfmake from 'pdfmake';
import DataTable from 'datatables.net-dt';
import 'datatables.net-buttons-dt';
import 'datatables.net-buttons/js/buttons.html5.mjs';
import 'datatables.net-buttons/js/buttons.print.mjs';
import 'datatables.net-responsive-dt';
import 'datatables.net-scroller-dt';
import 'datatables.net-searchpanes-dt';
import * as bootstrap from 'bootstrap';

DataTable.use(bootstrap);
DataTable.Buttons.jszip(jszip);
DataTable.Buttons.pdfMake(pdfmake);


