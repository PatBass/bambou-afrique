<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 19/12/17
 * Time: 06:50
 */

namespace MainBundle\Controller;

use MainBundle\Entity\Category;
use MainBundle\Entity\Image;
use MainBundle\Entity\Product;
use MainBundle\Entity\Specialitylist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class TestController
 * @package MainBundle\Controller
 *
 * @author Patrick Bassoukissa <patrickbassoukissa@gmail.com>
 */
class TestController extends Controller
{
    /**
     * @Route("/test/add", name="test_add")
     */
    public function addProductAction()
    {
        //die('Adding Products');
        $productsList = [
            [
                "id"          => 14,
                "title"       => "Chiche tawook",
                "price"       => 28,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "sandwiches",
                "url"       => "/images_uploads/14.jpg"
            ],
            [
                "id"          => 15,
                "title"       => "Chiche Kebab",
                "price"       => 28,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "sandwiches",
                "url"       => "/images_uploads/15.jpg"
            ],
            [
                "id"          => 16,
                "title"       => "Sandwich mixte",
                "price"       => 30,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "sandwiches",
                "url"       => "/images_uploads/16.jpg"

            ],
            [
                "id"          => 17,
                "title"       => "Chawarma + viande + frites",
                "price"       => 28,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "sandwiches",
                "url"       => "/images_uploads/17.jpg"
            ],
            [
                "id"          => 18,
                "title"       => "Salade mixte",
                "price"       => 15,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "salades",
                "url"       => "/images_uploads/18.jpg"
            ],
            [
                "id"          => 19,
                "title"       => "Tiep au poulet",
                "price"       => 69,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/19.jpg"
            ],
            [
                "id"          => 20,
                "title"       => "Yassa poisson aux crevettes",
                "price"       => 95,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/20.jpg"
            ],
            [
                "id"          => 21,
                "title"       => "Sole",
                "price"       => 100,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/21.jpg"
            ],
            [
                "id"          => 22,
                "title"       => "1/2 Poulet braisé",
                "price"       => 55,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/22.jpg"
            ],
            [
                "id"          => 23,
                "title"       => "Carpe braisée",
                "price"       => 100,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/23.jpg"
            ],
            [
                "id"          => 24,
                "title"       => "Sauce graine (Niemboué ou Mosaka)",
                "price"       => 105,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/24.jpg"
            ],
            [
                "id"          => 25,
                "title"       => "Sauce arrachide au poulet (Mafé ou Emboto)",
                "price"       => 105,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/25.jpg"
            ],
            [
                "id"          => 26,
                "title"       => "Sauce arrachide viande",
                "price"       => 120,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/26.jpg"
            ],
            [
                "id"          => 27,
                "title"       => "Sauce aubergine",
                "price"       => 75,
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porta arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum quis posuere dolor. Praesent hendrerit efficitur pretium. Mauris volutpat vehicula est at rhoncus",
                "category"    => "africaine",
                "url"       => "/images_uploads/27.jpg"
            ],

        ];

        $em = $this->getDoctrine()->getManager();

        for ($i = 0; $i < count($productsList); $i++) {
            $product = new Product();
            $product->setTitle($productsList[$i]["title"]);
            $product->setPrice($productsList[$i]["price"]);
            $product->setDescription($productsList[$i]["description"]);
            $product->setAvailable(true);

            $image = new Image();
            $image->setUrl($productsList[$i]["url"]);
            $product->setImage($image);

            $category = new Category();
            $category->setName($productsList[$i]["category"]);
            $product->addCategory($category);



            $em->persist($product);
        }

        $em->flush();

        return new Response('Data have been recorded!');

    }

    /**
     * @Route("/test/add-list", name="add_list")
     */
    public function addListAction()
    {
        $specialityList = [
            [
                "id"          => 14,
                "title"       => "Africaine",
                "url"       => "/gal5.jpg"
            ],
            [
                "id"          => 17,
                "title"       => "International",
                "url"       => "/grillades_mixtes.jpg"
            ],
            [
                "id"          => 18,
                "title"       => "Art africain",
                "url"       => "/gal6.jpg"
            ],
            [
                "id"          => 19,
                "title"       => "Marocaine",
                "url"       => "/viande_pruneaux.jpg"
            ],
            [
                "id"          => 20,
                "title"       => "Desserts",
                "url"       => "/creme_caramel.jpg"
            ],
            [
                "id"          => 22,
                "title"       => "Boissons et jus",
                "url"       => "/jus_mangue.jpg"
            ],
            [
                "id"          => 25,
                "title"       => "Sandwiches",
                "url"       => "/chawarma_poulet.jpg"
            ],
            [
                "id"          => 26,
                "title"       => "Salades",
                "url"       => "/salade_mixte.jpg"
            ]

        ];

        $em = $this->getDoctrine()->getManager();

        for ($i = 0; $i < count($specialityList); $i++) {
            $product = new Specialitylist();
            $product->setTitle($specialityList[$i]["title"]);

            $image = new Image();
            $image->setUrl($specialityList[$i]["url"]);
            $product->setImage($image);

            $em->persist($product);
        }

        $em->flush();

        return new Response('Data have been recorded!');
    }

}