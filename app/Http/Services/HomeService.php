<?php


namespace App\Http\Services;



use App\Http\Daos\LearnCategoryDao;
use App\Http\Daos\LearnJapaneseDao;
use App\Http\Daos\QuizDao;
use App\Http\Daos\SetDao;

class HomeService
{
    public function __construct(SetDao $setDao, QuizDao $quizDao, LearnJapaneseDao $learnJapaneseDao,LearnCategoryDao $learnCategoryDao)
    {
        $this->setDao = $setDao;
        $this->quizDao = $quizDao;
        $this->learnJapaneseDao = $learnJapaneseDao;
        $this->learnCategoryDao = $learnCategoryDao;
    }

    public function getLevelDetail($level)
    {
        return $this->learnJapaneseDao->getLevelBySlug($level);
    }

    public function getCategoryDetail($category)
    {
        return $this->learnCategoryDao->getCategoryBySlug($category);
    }

    public function getSetDetail($set)
    {
        return $this->setDao->getSetBySlug($set);
    }

    public function getSetList($lId,$sId)
    {
        return $this->quizDao->getPublishQuiz($lId, $sId);
    }

    public function getCategoryData($level, $category)
    {
        return $this->quizDao->getCategoryDetail($level, $category);
    }

    public function getSetsByLevel($level)
    {
        return $this->learnJapaneseDao->where('id',$level)->first();
    }
}
