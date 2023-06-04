<?php

namespace App\Helpers;



class Comn
{

    public static function showModalData($showValue, $modelTitle, $modelCollection)
    {
        $html = "
        
        <div  x-show=\"".$showValue."\" class=\"max-w-4xl mx-auto mt-5\">

        <div class=\"px-4 sm:px-6 lg:px-8\">
            <div class=\"sm:flex sm:items-center\">
                <div class=\"sm:flex-auto\">
                    <h1 class=\"text-xl font-semibold text-gray-900\">".$modelTitle."</h1>
                </div>
            </div>
            <div class=\"mt-8 flex flex-col\">
                <div class=\"-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle md:px-6 lg:px-8\">
                        <div class=\"overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg\">
        
        
                            <table class=\"min-w-full divide-y divide-gray-300\">
                                <thead class=\"bg-gray-50\">
                                <tr>
                                    <th scope=\"col\"
                                        class=\"py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6\">
                                        ID
                                    </th>
                                    <th scope=\"col\"
                                        class=\"px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500\">
                                        Name
                                    </th>
                                </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-200 bg-white\">";
        
                                foreach($modelCollection as $model)
                                {
                                    $html .= "<tr>
                                        <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6\">".
                                            $model->id
                                        ."</td>                                
                                        <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">".
                                            $model->name
                                        ."</td>                
                                    </tr>";
                                }
                            

    $html .= "                   </tbody>
                            </table>
        
                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        </div>
                
        ";

        return $html;
    }

}