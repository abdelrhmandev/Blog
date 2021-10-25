<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Menuitem;
use App\Models\Page;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
      $menuitems = '';
      $desiredMenu = '';  
      if(isset($id) && $id != 'new'){
        $id = $id;
        $desiredMenu = Menu::where('id',$id)->first();
        if($desiredMenu->content != ''){
          $menuitems = json_decode($desiredMenu->content);
          $menuitems = $menuitems[0]; 
          foreach($menuitems as $menu){
            $menu->title = Menuitem::where('id',$menu->id)->value('title');
            $menu->name = Menuitem::where('id',$menu->id)->value('name');
            $menu->slug = Menuitem::where('id',$menu->id)->value('slug');
            $menu->target = Menuitem::where('id',$menu->id)->value('target');
            $menu->type = Menuitem::where('id',$menu->id)->value('type');
            $menu->depth = Menuitem::where('id',$menu->id)->value('depth');
            if(!empty($menu->children[0])){
              foreach ($menu->children[0] as $child) {
                $child->title = Menuitem::where('id',$child->id)->value('title');
                $child->name = Menuitem::where('id',$child->id)->value('name');
                $child->slug = Menuitem::where('id',$child->id)->value('slug');
                $child->target = Menuitem::where('id',$child->id)->value('target');
                $child->type = Menuitem::where('id',$child->id)->value('type');
                $menu->depth = Menuitem::where('id',$menu->id)->value('depth');
              }  
            }
          }
        }else{
          $menuitems = Menuitem::where('menu_id',$desiredMenu->id)->get();                    
        }            
      }else{
        $desiredMenu = Menu::orderby('id','DESC')->first();
        if($desiredMenu){
          if($desiredMenu->content != ''){
            $menuitems = json_decode($desiredMenu->content);
            $menuitems = $menuitems[0]; 
            foreach($menuitems as $menu){
              $menu->title = Menuitem::where('id',$menu->id)->value('title');
              $menu->name = Menuitem::where('id',$menu->id)->value('name');
              $menu->slug = Menuitem::where('id',$menu->id)->value('slug');
              $menu->target = Menuitem::where('id',$menu->id)->value('target');
              $menu->type = Menuitem::where('id',$menu->id)->value('type');
              $menu->depth = Menuitem::where('id',$menu->id)->value('depth');
              if(!empty($menu->children[0])){
                foreach ($menu->children[0] as $child) {
                  $child->title = Menuitem::where('id',$child->id)->value('title');
                  $child->name = Menuitem::where('id',$child->id)->value('name');
                  $child->slug = Menuitem::where('id',$child->id)->value('slug');
                  $child->target = Menuitem::where('id',$child->id)->value('target');
                  $child->type = Menuitem::where('id',$child->id)->value('type');
                  $child->depth = Menuitem::where('id',$child->id)->value('depth');
                }  
              }
            }
          }else{
            $menuitems = Menuitem::where('menu_id',$desiredMenu->id)->get();
          }                                   
        }           
      }
      return view ('admin.menus.menu',['menus'=>$menuitems,'desiredMenu'=>$desiredMenu,'menuitems'=>$menuitems]);
    }	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function store(Request $request){
        $data = $request->all(); 
  
        if(Menu::create($data)){ 
          $newdata = Menu::orderby('id','DESC')->first();  
          session::flash('success','Menu saved successfully !');         
          return redirect()->route("manage-menus",["id"=>$newdata->id]);
          


        }else{
          return redirect()->back()->with('error','Failed to save menu !');
        }
    }
 

    public function destroy(Request $request){
  Menuitem::where('menu_id',$request->id)->delete();	
  menu::findOrFail($request->id)->delete();
  return redirect('manage-menus')->with('success','Menu deleted successfully');
}	

      
 
      public function updateMenu(Request $request){
        $newdata = $request->all(); 
        $menu=Menu::findOrFail($request->menuid);            
        $content = $request->data; 
        $newdata = [];  
        $newdata['location'] = $request->location;       
        $newdata['content'] = json_encode($content);
        $menu->update($newdata); 
      }


      public function deleteMenuItem($id,$key,$in=''){        
        $menuitem = Menuitem::findOrFail($id);
        $menu = Menu::where('id',$menuitem->menu_id)->first();
        if($menu->content != ''){
          $data = json_decode($menu->content,true);            
          $maindata = $data[0];            
          if($in == ''){
            unset($data[0][$key]);
            $newdata = json_encode($data); 
            $menu->update(['content'=>$newdata]);                         
          }else{
            unset($data[0][$key]['children'][0][$in]);
            $newdata = json_encode($data);
            $menu->update(['content'=>$newdata]); 
          }
        }
        $menuitem->delete();
        return redirect()->back();
      }	


      public function updateMenuItem(Request $request){
        $data = $request->all();        
        $item = Menuitem::findOrFail($request->id);
        $item->update($data);
        return redirect()->back();
      }



      public function addPostToMenu(Request $request){
        $data = $request->all();
        $menuid = $request->menuid;
        $ids = $request->ids;
        $menu = menu::findOrFail($menuid);
        if($menu->content == ''){
          foreach($ids as $id){
            $data['title'] = post::where('id',$id)->value('title');
            $data['slug'] = post::where('id',$id)->value('slug');
            $data['type'] = 'post';
            $data['menu_id'] = $menuid;
            $data['updated_at'] = NULL;
            menuitem::create($data);
          }
        }else{
          $olddata = json_decode($menu->content,true); 
          foreach($ids as $id){
            $data['title'] = post::where('id',$id)->value('title');
            $data['slug'] = post::where('id',$id)->value('slug');
            $data['type'] = 'post';
            $data['menu_id'] = $menuid;
            $data['updated_at'] = NULL;
            menuitem::create($data);
          }
          foreach($ids as $id){
            $array['title'] = post::where('id',$id)->value('title');
            $array['slug'] = post::where('id',$id)->value('slug');
            $array['name'] = NULL;
            $array['type'] = 'post';
            $array['target'] = NULL;
            $array['id'] = menuitem::where('slug',$array['slug'])->where('name',$array['name'])->where('type',$array['type'])->orderby('id','DESC')->value('id');                
            $array['children'] = [[]];
            array_push($olddata[0],$array);
            $oldata = json_encode($olddata);
            $menu->update(['content'=>$olddata]);
          }
        }
      }

      
      
}
