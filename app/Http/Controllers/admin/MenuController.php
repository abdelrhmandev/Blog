<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menus;
use App\Models\MenuItems;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() { 
         return view('admin.menus.menu');  // pass the parameters 
      }

      public function hgeneratemenucontrol_override(Request $request)
      {
      
       
          $menu = Menus::find(request()->input("idmenu"));
          $menu->name = request()->input("menuname");
  
          $menu->save();
          if (is_array(request()->input("arraydata"))) {
           
              foreach (request()->input("arraydata") as $value) {
  
                $menuitem = MenuItems::find($value["id"]);
                $menuitem->parent = $value["parent"];
                $menuitem->sort = $value["sort"];
                $menuitem->depth = $value["depth"];
  
 
                 $menuitem->save();
               
              }

              
          }

          echo json_encode(array("resp" => 1));
  
      }

      public function add_menu_item(Request $request)
    {
     
      
        if(!empty(request()->input("target_id"))){
        foreach(request()->input("target_id") as $key => $value){
                $target_id = $value;
                $target_type = request()->input("target_type"); 
                $menuitem = new MenuItems();
                $menuitem->target_type = $target_type;
                $menuitem->target_id = $target_id;
                $menuitem->menu = request()->input("idmenu");
                $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
                $menuitem->save();    
            }
            return true;
        }
    }

  
      
      
}
