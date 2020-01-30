<?php


namespace App\Service\impl;


use App\Repository\SingerRepositoryInterface;
use App\Service\SingerServiceInterface;
use App\Singer;
use Illuminate\Http\Request;

class SingerService implements SingerServiceInterface
{
    /**
     * @var SingerRepositoryInterface
     */
    private $singerRepository;

    public function __construct(SingerRepositoryInterface $singerRepository)
    {
        $this->singerRepository = $singerRepository;
    }

    public function getSingers()
    {
        return $this->singerRepository->getSingers();
    }

    public function getSinger($singerId)
    {
        return $this->singerRepository->getSinger($singerId);
    }

    public function create(Request $request)
    {
        $singer = new Singer();
        $singer->name = $request->singerName;
        $singer->avatar = $request->singerAvatar;
        $singer->description = $request->singerDes;
        $singer->singerGender = $request->singerGender;
        $singer->singerNickName = $request->singerNickName;
        return $this->singerRepository->create($singer);
    }

//    public function update(Request $request, $id)
//    {
//        $music = $this->singerRepository->finById($id);
//        $music->id = $request->id;
//        $music->name = $request->name;
//        $music->singer = $request->singer;
//        $music->description = $request->description;
//        $music->avatar = $request->avatar;
//        $music->musicUrl = $request->musicUrl;
//        $this->singerRepository->update($music);
//    }
//
//    public function delete($id)
//    {
//        $idMusic = $this->singerRepository->finById($id);
//        return $this->singerRepository->delete($idMusic);
//    }
}
