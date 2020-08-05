<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\Person';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\Person';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Person();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('login', $data) && $data['login'] !== null) {
            $object->setLogin($data['login']);
        }
        elseif (\array_key_exists('login', $data) && $data['login'] === null) {
            $object->setLogin(null);
        }
        if (\array_key_exists('admin', $data) && $data['admin'] !== null) {
            $object->setAdmin($data['admin']);
        }
        elseif (\array_key_exists('admin', $data) && $data['admin'] === null) {
            $object->setAdmin(null);
        }
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived($data['archived']);
        }
        elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
        }
        if (\array_key_exists('subscribed', $data) && $data['subscribed'] !== null) {
            $object->setSubscribed($data['subscribed']);
        }
        elseif (\array_key_exists('subscribed', $data) && $data['subscribed'] === null) {
            $object->setSubscribed(null);
        }
        if (\array_key_exists('avatar_url', $data) && $data['avatar_url'] !== null) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        elseif (\array_key_exists('avatar_url', $data) && $data['avatar_url'] === null) {
            $object->setAvatarUrl(null);
        }
        if (\array_key_exists('roles', $data) && $data['roles'] !== null) {
            $values = array();
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        elseif (\array_key_exists('roles', $data) && $data['roles'] === null) {
            $object->setRoles(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('updated_by_id', $data) && $data['updated_by_id'] !== null) {
            $object->setUpdatedById($data['updated_by_id']);
        }
        elseif (\array_key_exists('updated_by_id', $data) && $data['updated_by_id'] === null) {
            $object->setUpdatedById(null);
        }
        if (\array_key_exists('harvest_user_id', $data) && $data['harvest_user_id'] !== null) {
            $object->setHarvestUserId($data['harvest_user_id']);
        }
        elseif (\array_key_exists('harvest_user_id', $data) && $data['harvest_user_id'] === null) {
            $object->setHarvestUserId(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] !== null) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        }
        elseif (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] === null) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('working_days', $data) && $data['working_days'] !== null) {
            $object->setWorkingDays($this->denormalizer->denormalize($data['working_days'], 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays', 'json', $context));
        }
        elseif (\array_key_exists('working_days', $data) && $data['working_days'] === null) {
            $object->setWorkingDays(null);
        }
        if (\array_key_exists('color_blind', $data) && $data['color_blind'] !== null) {
            $object->setColorBlind($data['color_blind']);
        }
        elseif (\array_key_exists('color_blind', $data) && $data['color_blind'] === null) {
            $object->setColorBlind(null);
        }
        if (\array_key_exists('personal_feed_token_id', $data) && $data['personal_feed_token_id'] !== null) {
            $object->setPersonalFeedTokenId($data['personal_feed_token_id']);
        }
        elseif (\array_key_exists('personal_feed_token_id', $data) && $data['personal_feed_token_id'] === null) {
            $object->setPersonalFeedTokenId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getAdmin()) {
            $data['admin'] = $object->getAdmin();
        }
        if (null !== $object->getArchived()) {
            $data['archived'] = $object->getArchived();
        }
        if (null !== $object->getSubscribed()) {
            $data['subscribed'] = $object->getSubscribed();
        }
        if (null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        if (null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
        }
        if (null !== $object->getUpdatedById()) {
            $data['updated_by_id'] = $object->getUpdatedById();
        }
        if (null !== $object->getHarvestUserId()) {
            $data['harvest_user_id'] = $object->getHarvestUserId();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getWorkingDays()) {
            $data['working_days'] = $this->normalizer->normalize($object->getWorkingDays(), 'json', $context);
        }
        if (null !== $object->getColorBlind()) {
            $data['color_blind'] = $object->getColorBlind();
        }
        if (null !== $object->getPersonalFeedTokenId()) {
            $data['personal_feed_token_id'] = $object->getPersonalFeedTokenId();
        }
        return $data;
    }
}