<?php

/**
 * This class returns a string with a image uri
 *
 * @package Toinhoitacity\Tmdb\HTTPClient\Image
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Toinhoitacity\Tmdb\HTTPClient\Image;

class ImageUri implements ImageUriInterface
{
    private $imageUri = null;

    /**
     * Image Uri construct
     *
     * @param string $imageUri
     */
    public function __construct(string $imageUri = null)
    {
        if (empty($imageUri)) {
            $this->imageUri = "https://dummyimage.com/300x450/aaaaaa/5c4711&text=No+image+available";
        } else {
            $this->imageUri = ImageUriInterface::IMAGE_URI . $imageUri;
        }
    }

    /**
     * @param  string $imageUri
     * @return Toinhoitacity\Tmdb\HTTPClient\Image\ImageUriInterface $this
     */
    public function setImageUri(string $imageUri): ImageUriInterface
    {
        if (empty($imageUri)) {
            $this->imageUri = "https://dummyimage.com/300x450/aaaaaa/5c4711&text=No+image+available";
        } else {
            $this->imageUri = ImageUriInterface::IMAGE_URI . $imageUri;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUri(): string
    {
        return  $this->imageUri ?? ImageUriInterface::IMAGE_URI;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getImageUri();
    }
}