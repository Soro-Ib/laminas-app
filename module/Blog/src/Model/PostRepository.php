<?php
namespace Blog\Model;

class PostRepository implements PostRepositoryInterface
{
    private $data;
    /**
     * {@inheritDoc}
     */
    public function poste($post){
        return new Post(
            $post['title'],
            $post['text'],
            $post['id']
        );
    }
    public function findAllPosts()
    {
        return array_map('poste', $this->data);
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        if (! isset($this->data[$id])) {
            throw new DomainException(sprintf('Post by id "%s" not found', $id));
        }

        return new Post(
            $this->data[$id]['title'],
            $this->data[$id]['text'],
            $this->data[$id]['id']
        );
    }
}