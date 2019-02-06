<?php

namespace SanSan\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SanSan\Http\Controllers\Controller;

class GroupController extends Controller
{
    private $language = 'en';
    private $group = '';
    private $slug = '';
    private $model;
    private $bolError = false;


    public function __construct(Request $request)
    {
        //$request->setLocale('id');
        $this->group = $request->segment(1);
        if (count($request->segments()) > 1) {
            $this->slug = Str::before($request->segment(2), '.html');
        }
        $this->language = $request->getLocale();
        $this->doCheckGroup($this->group);
    }

    public function index()
    {
        if ($this->bolError === true) {
            return abort('404');
        } else {
            dd($this->model->all()->toJson());
        }
    }

    public function slug($group, $slug)
    {
        dd($group, $slug);
    }

    /**
     * @param string $group
     * @return $this|\Illuminate\Http\JsonResponse
     */
    private function doCheckGroup(string $group)
    {
        $groupModel = 'SanSan\\Models\\Blog\\' . ucfirst(__($group, [], 'en'));
        try {
            $model = \App::make($groupModel);
        } catch (\Exception $e) {
            $this->bolError = true;
        }
        if ($this->bolError === false) {
            $this->model = $model;
        }
        return $this;
    }
}
