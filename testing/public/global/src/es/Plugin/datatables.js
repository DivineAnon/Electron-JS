import $ from 'jquery'
import Plugin from 'Plugin'

const NAME = 'dataTable'

class DataTable extends Plugin {
  getName() {
    return NAME
  }

  render() {
    if (!$.fn.dataTable) {
      return
    }

    // if ($.fn.dataTable.TableTools) {
    //   // Set the classes that TableTools uses to something suitable for Bootstrap
    //   $.extend(true, $.fn.dataTable.TableTools.classes, {
    //     container: 'DTTT btn-group btn-group float-left',
    //     buttons: {
    //       normal: 'btn btn-outline btn-default',
    //       disabled: 'disabled'
    //     },
    //     print: {
    //       body: 'site-print DTTT_Print'
    //     }
    //   });
    // }

    this.$el.dataTable(this.options)
  }

  static getDefaults() {
    return {
      responsive: true,
      language: {
        sSearchPlaceholder: 'Search..',
        lengthMenu: '_MENU_',
        search: '_INPUT_'
        // paginate: {
        //   previous: '<i class="icon md-chevron-left"></i>',
        //   next: '<i class="icon md-chevron-right"></i>'
        // }
      }
      // classes: {
      //   sFilterInput: "form-control form-control-sm",
      //   sLengthSelect: "form-control form-control-sm"
      // }
    }
  }
}

Plugin.register(NAME, DataTable)

export default DataTable
