<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\WithPagination;


class Posts extends Component
{

    use WithPagination;

    public $search;
    public $count;
    public $slug;
    public $isOpen = 0;
    public $postId, $title, $description;

    public function render()
    {
        $this->count = Post::count();


        $searchParams = '%' . $this->search . '%';

        return view('livewire.posts', [
            'posts' => Post::where('title', 'like', $searchParams)->paginate(5)
        ]);
    }



    public function showModal()
    {
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->isOpen = false;
    }

    public function store(Post $request)
    {
        $this->validate([
            'title' => 'required|unique:posts|min:10',
            'description' => 'required|min:6'
        ]);

        Post::updateOrCreate(['id' => $this->postId], [
            'slug' => Str::slug($this->title, '-'),
            'title' => $this->title,
            'description' => $this->description
        ]);

        $this->hideModal();

        session()->flash('info', $this->postId ? 'Post berhasil diperbarui!' : 'Post berhasil dibuat!');

        $this->postId = '';
        $this->title = '';
        $this->description = '';
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $this->postId = $id;
        $this->title = $post->title;
        $this->description = $post->description;

        $this->showModal();
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('delete', 'Post Berhasil dihapus!');
    }
}
